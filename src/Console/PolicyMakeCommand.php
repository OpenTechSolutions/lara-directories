<?php

namespace Opentech\Directories\Console;



class PolicyMakeCommand extends \Illuminate\Foundation\Console\PolicyMakeCommand
{
    use DefaultNamespaceTrait;

    protected function getDefaultNamespace($rootNamespace)
    {
        return $this->namespaceOverride($rootNamespace, 'policies_namespace');
    }
}
