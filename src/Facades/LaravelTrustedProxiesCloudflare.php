<?php

namespace Vormkracht10\LaravelTrustedProxiesCloudflare\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Vormkracht10\LaravelTrustedProxiesCloudflare\LaravelTrustedProxiesCloudflare
 */
class LaravelTrustedProxiesCloudflare extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Vormkracht10\LaravelTrustedProxiesCloudflare\LaravelTrustedProxiesCloudflare::class;
    }
}
