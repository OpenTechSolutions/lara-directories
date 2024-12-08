<?php

namespace Opentech\Directories\Console;



class InterfaceMakeCommand extends \Illuminate\Foundation\Console\InterfaceMakeCommand
{
    use DefaultNamespaceTrait;

    protected function getDefaultNamespace($rootNamespace)
    {
        return $this->namespaceOverride($rootNamespace, 'interfaces_namespace');
    }
}
