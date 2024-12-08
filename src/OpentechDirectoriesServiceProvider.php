<?php

use Illuminate\Support\ServiceProvider;

class OpentechDirectoriesServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot(){
        // Publish configuration file
        $this->publishes([
            __DIR__.'/../config/directories.php' => config_path('directories.php'),
        ], 'config');
    }
}
