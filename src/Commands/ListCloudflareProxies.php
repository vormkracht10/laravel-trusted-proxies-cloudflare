<?php

namespace Vormkracht10\TrustedProxiesCloudflare\Commands;

use Illuminate\Console\Command;
use Illuminate\Console\Concerns\InteractsWithIO;
use Vormkracht10\TrustedProxiesCloudflare\Actions\GetCloudflareProxies;

class ListCloudflareProxies extends Command
{
    use InteractsWithIO;

    public $signature = 'cloudflare:list-trusted-proxies';

    public $description = 'Cache updated Cloudflare proxies';

    public function handle(): int
    {
        $proxies = (new GetCloudflareProxies)();

        $rows = array_map(fn ($value): array => [$value], $proxies);

        sort($rows);

        if (count($rows ?? [])) {
            $this->table(['IP address'], $rows);

            return self::SUCCESS;
        }

        $this->components->error('Failed to load Cloudflare proxies.');

        return self::FAILURE;
    }
}
