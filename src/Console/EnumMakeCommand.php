<?php

namespace Opentech\Directories\Console;



class EnumMakeCommand extends \Illuminate\Foundation\Console\EnumMakeCommand
{
    use DefaultNamespaceTrait;

    protected function getDefaultNamespace($rootNamespace)
    {
        return $this->namespaceOverride($rootNamespace, 'enums_namespace');
    }
}
