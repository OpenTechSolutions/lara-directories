<?php

namespace Opentech\Directories\View\Compilers;

use Illuminate\View\DynamicComponent;

class BladeCompilerFactory
{
    public static function make($app)
    {
        return tap(new BladeCompiler(
            $app['files'],
            $app['config']['view.compiled'],
            $app['config']->get('view.relative_hash', false) ? $app->basePath() : '',
            $app['config']->get('view.cache', true),
            $app['config']->get('view.compiled_extension', 'php'),
        ), function ($blade) {
            $blade->component('dynamic-component', DynamicComponent::class);
        });
    }
}
