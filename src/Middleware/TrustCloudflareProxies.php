<?php

namespace Vormkracht10\TrustedProxiesCloudflare\Middleware;

use Closure;
use Illuminate\Http\Request;
use Vormkracht10\TrustedProxiesCloudflare\Actions\GetCloudflareProxies;

class TrustCloudflareProxies
{
    public function handle(Request $request, Closure $next)
    {
        $request->setTrustedProxies(
            $this->getCachedProxies(),
            Request::HEADER_X_FORWARDED_FOR | Request::HEADER_X_FORWARDED_HOST | Request::HEADER_X_FORWARDED_PORT | Request::HEADER_X_FORWARDED_PROTO | Request::HEADER_X_FORWARDED_PREFIX | Request::HEADER_X_FORWARDED_AWS_ELB
        );

        if (! app()->isLocal() && ! $request->secure()) {
            return redirect()->secure($request->path());
        }

        return $next($request);
    }

    public function getCachedProxies(): array
    {
        return cache()
            ->driver(config('trusted-proxies-cloudflare.cache.store'))
            ->rememberForever(config('trusted-proxies-cloudflare.cache.key'), fn () => (new GetCloudflareProxies)());
    }
}
