<?php

namespace Vormkracht10\TrustedProxiesCloudflare;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Vormkracht10\TrustedProxiesCloudflare\Commands\CacheCloudflareProxies;
use Vormkracht10\TrustedProxiesCloudflare\Commands\ListCloudflareProxies;
use Vormkracht10\TrustedProxiesCloudflare\Middleware\TrustCloudflareProxies;

class TrustedProxiesCloudflareServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-trusted-proxies-cloudflare')
            ->hasConfigFile()
            ->hasCommands(
                CacheCloudflareProxies::class,
                ListCloudflareProxies::class
            );
    }

    public function packageBooted()
    {
        $kernel = app(\Illuminate\Contracts\Http\Kernel::class);

        $kernel->pushMiddleware(TrustCloudflareProxies::class);
    }
}
