<?php

namespace Vormkracht10\TrustedProxiesCloudflare\Actions;

class GetCloudflareProxies
{
    public function __invoke(): ?array
    {
        $ipv4 = explode(PHP_EOL, trim(file_get_contents(config('trusted-proxies-cloudflare.api.ipv4'))));
        $ipv6 = explode(PHP_EOL, trim(file_get_contents(config('trusted-proxies-cloudflare.api.ipv6'))));

        return array_merge($ipv4, $ipv6);
    }
}
