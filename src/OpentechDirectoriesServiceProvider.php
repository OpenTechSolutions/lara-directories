<?php
namespace Opentech\Directories;

use Illuminate\Support\ServiceProvider;
use Opentech\Directories\View\Compilers\BladeCompilerFactory;

class OpentechDirectoriesServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadConfig();
    }

    public function boot(){
        $this->loadConfig();

        $this->app->singleton('blade.compiler', function ($app) {
            return BladeCompilerFactory::make($app);
        });

        // Publish configuration file
        $this->publishes([
            __DIR__.'/../config/directories.php' => config_path('directories.php'),
        ], 'config');
    }

    public function loadConfig()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/directories.php', 'directories'
        );
        config()->set('view.paths', array_merge(config('directories.view.paths'), config('view.paths')));
    }
}
