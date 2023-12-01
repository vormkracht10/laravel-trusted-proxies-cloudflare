<?php

namespace Vormkracht10\TrustedProxiesCloudflare\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Vormkracht10\TrustedProxiesCloudflare\TrustedProxiesCloudflare
 */
class TrustedProxiesCloudflare extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Vormkracht10\TrustedProxiesCloudflare\TrustedProxiesCloudflare::class;
    }
}
