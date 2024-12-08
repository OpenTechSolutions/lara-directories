<?php

namespace Opentech\Directories\Console;



class ScopeMakeCommand extends \Illuminate\Foundation\Console\ScopeMakeCommand
{
    use DefaultNamespaceTrait;

    protected function getDefaultNamespace($rootNamespace)
    {
        return $this->namespaceOverride($rootNamespace, 'scopes_namespace');
    }
}
