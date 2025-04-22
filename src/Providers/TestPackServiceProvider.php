<?php

namespace Devbekzod\TestPack\Providers;

use Devbekzod\TestPack\TestPack;
use Illuminate\Support\ServiceProvider;

class TestPackServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        //
    }

    public function register(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');

        $this->mergeConfigFrom(__DIR__ . '/../../config/config.php', 'test-pack');

        $this->app->bind(TestPack::class, fn() => new TestPack());
    }
}