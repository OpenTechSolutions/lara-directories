<?php

namespace Opentech\Directories\Console;



class ObserverMakeCommand extends \Illuminate\Foundation\Console\ObserverMakeCommand
{
    use DefaultNamespaceTrait;

    protected function getDefaultNamespace($rootNamespace)
    {
        return $this->namespaceOverride($rootNamespace, 'observers_namespace');
    }
}
