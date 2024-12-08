<?php

namespace Opentech\Directories\Console;



class MiddlewareMakeCommand extends \Illuminate\Routing\Console\MiddlewareMakeCommand
{
    use DefaultNamespaceTrait;

    protected function getDefaultNamespace($rootNamespace)
    {
        return $this->namespaceOverride($rootNamespace, 'middlewares_namespace');
    }
}
