<?php

namespace Vormkracht10\TrustedProxiesCloudflare\Actions;

class GetCloudflareIPs
{
    public function __invoke()
    {
        $ipv4 = explode(PHP_EOL, trim(file_get_contents(config('trusted-proxies-cloudflare.api.ipv4')));
        $ipv6 = explode(PHP_EOL, trim(file_get_contents(config('trusted-proxies-cloudflare.api.ipv4')));

        return $ipv4 + $ipv6;
    }
}
