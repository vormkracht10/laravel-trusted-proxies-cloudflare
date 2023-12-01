<?php

return [
    'enabled' => (bool) env('TRUSTED_PROXIES_CLOUDFLARE_ENABLED', false),

    'cache' => [
        'key' => env('TRUSTED_PROXIES_CLOUDFLARE_CACHE_KEY', 'trusted-proxies-cloudflare'),
        'store' => env('TRUSTED_PROXIES_CLOUDFLARE_CACHE_STORE', 'file'),
    ],

    'api' => [
        'ipv4' => 'https://www.cloudflare.com/ips-v4',
        'ipv6' => 'https://www.cloudflare.com/ips-v6',
    ],
];
