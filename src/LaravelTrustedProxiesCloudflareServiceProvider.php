<?php

namespace Vormkracht10\LaravelTrustedProxiesCloudflare;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Vormkracht10\LaravelTrustedProxiesCloudflare\Commands\LaravelTrustedProxiesCloudflareCommand;

class LaravelTrustedProxiesCloudflareServiceProvider extends PackageServiceProvider
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
            ->hasViews()
            ->hasMigration('create_laravel-trusted-proxies-cloudflare_table')
            ->hasCommand(LaravelTrustedProxiesCloudflareCommand::class);
    }
}
