<?php

namespace Opentech\Directories\Console;



class RequestMakeCommand extends \Illuminate\Foundation\Console\RequestMakeCommand
{
    use DefaultNamespaceTrait;

    protected function getDefaultNamespace($rootNamespace)
    {
        return $this->namespaceOverride($rootNamespace, 'requests_namespace');
    }
}
