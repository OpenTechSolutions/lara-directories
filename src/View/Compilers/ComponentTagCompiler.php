<?php

namespace Opentech\Directories\View\Compilers;

use Illuminate\Container\Container;
use Illuminate\Contracts\Foundation\Application;

class ComponentTagCompiler extends \Illuminate\View\Compilers\ComponentTagCompiler
{
    public function guessClassName(string $component): string
    {
        $app = Container::getInstance()
            ->make(Application::class);

        $config = Container::getInstance()
            ->make('config');
        $namespace = $app->getNamespace();
        $class = $this->formatClassName($component);

        return $namespace . $config->get('directories.console.components_namespace') . $class;
    }
}
