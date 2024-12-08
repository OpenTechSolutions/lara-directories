<?php

namespace Opentech\Directories\Console;



class RuleMakeCommand extends \Illuminate\Foundation\Console\RuleMakeCommand
{
    use DefaultNamespaceTrait;

    protected function getDefaultNamespace($rootNamespace)
    {
        return $this->namespaceOverride($rootNamespace, 'rules_namespace');
    }
}
