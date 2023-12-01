<?php

namespace Vormkracht10\TrustedProxiesCloudflare\Commands;

use Illuminate\Console\Command;
use Vormkracht10\TrustedProxiesCloudflare\Actions\GetCloudflareIPs;

class CacheCloudflareProxies extends Command
{
    public $signature = 'cloudflare:cache-trusted-proxies';

    public $description = '';

    public function handle(): int
    {
        $ips = (new GetCloudflareIPs)();

        dd($ips);

        $this->comment('All done');

        return self::SUCCESS;
    }
}
