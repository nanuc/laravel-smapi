<?php

namespace Nanuc\Smapi;

use Illuminate\Support\ServiceProvider;

class SmapiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/smapi.php' => base_path('config/smapi.php')
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/smapi.php', 'smapi');
    }
}
