<?php

namespace Vormkracht10\TrustedProxiesCloudflare;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Vormkracht10\TrustedProxiesCloudflare\Commands\CacheCloudflareProxies;

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
            ->hasCommand(CacheCloudflareProxies::class);
    }
}
