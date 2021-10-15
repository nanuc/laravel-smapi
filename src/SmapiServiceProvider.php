<?php

namespace Nanuc\Smapi;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class SmapiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/smapi.php' => base_path('config/smapi.php')
        ], 'config');

        $this->registerMigrations();
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/smapi.php', 'smapi');
    }
    
    protected function registerMigrations()
    {
        $migrations = [
            'create_smapi_requests_table',
        ];

        if(!File::exists(database_path('migrations'))) {
            return;
        }

        $publishedMigrations = collect(File::allFiles(database_path('migrations')))
            ->map(function($file){
                return Str::replaceLast('.php', '', substr($file->getFilename(), 18));
            })
            ->toArray();

        foreach($migrations as $migration) {
            if(!in_array($migration, $publishedMigrations)) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/' . $migration . '.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_' . $migration . '.php')
                ], 'migrations');
            }
        }
    }
}
