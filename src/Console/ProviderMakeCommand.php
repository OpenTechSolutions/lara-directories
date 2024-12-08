<?php

namespace Opentech\Directories\Console;



class ProviderMakeCommand extends \Illuminate\Foundation\Console\ProviderMakeCommand
{
    use DefaultNamespaceTrait;

    protected function getDefaultNamespace($rootNamespace)
    {
        return $this->namespaceOverride($rootNamespace, 'providers_namespace');
    }
}
