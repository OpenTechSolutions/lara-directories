<?php

namespace Opentech\Directories\Console;



class ExceptionMakeCommand extends \Illuminate\Foundation\Console\ExceptionMakeCommand
{
    use DefaultNamespaceTrait;

    protected function getDefaultNamespace($rootNamespace)
    {
        return $this->namespaceOverride($rootNamespace, 'exceptions_namespace');
    }
}
