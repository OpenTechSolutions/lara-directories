<?php

namespace Opentech\Directories\Console;



class TraitMakeCommand extends \Illuminate\Foundation\Console\TraitMakeCommand
{
    use DefaultNamespaceTrait;

    protected function getDefaultNamespace($rootNamespace)
    {
        return $this->namespaceOverride($rootNamespace, 'scopes_namespace');
    }
}
