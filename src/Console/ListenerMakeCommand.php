<?php

namespace Opentech\Directories\Console;



class ListenerMakeCommand extends \Illuminate\Foundation\Console\ListenerMakeCommand
{
    use DefaultNamespaceTrait;

    protected function getDefaultNamespace($rootNamespace)
    {
        return $this->namespaceOverride($rootNamespace, 'listeners_namespace');
    }
}
