<?php

namespace Opentech\Directories\Console;

use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'make:component')]
class ComponentMakeCommand extends \Illuminate\Foundation\Console\ComponentMakeCommand
{
    use DefaultNamespaceTrait;
    protected function getDefaultNamespace($rootNamespace){
        return $this->namespaceOverride($rootNamespace, 'components_namespace');
    }
}
