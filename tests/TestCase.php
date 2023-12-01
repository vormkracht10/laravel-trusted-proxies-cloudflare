<?php

namespace Vormkracht10\LaravelTrustedProxiesCloudflare\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Vormkracht10\LaravelTrustedProxiesCloudflare\LaravelTrustedProxiesCloudflareServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Vormkracht10\\LaravelTrustedProxiesCloudflare\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelTrustedProxiesCloudflareServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-trusted-proxies-cloudflare_table.php.stub';
        $migration->up();
        */
    }
}
