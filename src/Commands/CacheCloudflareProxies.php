<?php

namespace Vormkracht10\TrustedProxiesCloudflare\Commands;

use Illuminate\Console\Command;
use Illuminate\Console\Concerns\InteractsWithIO;
use Vormkracht10\TrustedProxiesCloudflare\Actions\GetCloudflareProxies;

class CacheCloudflareProxies extends Command
{
    use InteractsWithIO;

    public $signature = 'cloudflare:cache-trusted-proxies';

    public $description = 'Cache updated Cloudflare proxies';

    public function handle(): int
    {
        $ips = (new GetCloudflareProxies)();

        if (count($ips ?? [])) {
            cache()
                ->driver(config('trusted-proxies-cloudflare.cache.store'))
                ->forever(config('trusted-proxies-cloudflare.cache.key'), $ips);

            $this->components->info('Cached Cloudflare proxies.');

            return self::SUCCESS;
        }

        $this->components->error('Failed to cache Cloudflare proxies.');

        return self::FAILURE;
    }
}
