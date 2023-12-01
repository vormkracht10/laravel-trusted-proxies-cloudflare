<?php

namespace Vormkracht10\LaravelTrustedProxiesCloudflare\Commands;

use Illuminate\Console\Command;

class LaravelTrustedProxiesCloudflareCommand extends Command
{
    public $signature = 'laravel-trusted-proxies-cloudflare';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
