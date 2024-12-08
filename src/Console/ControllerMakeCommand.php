<?php

namespace Opentech\Directories\Console;

class ControllerMakeCommand extends \Illuminate\Routing\Console\ControllerMakeCommand
{
    use DefaultNamespaceTrait;

    protected function getDefaultNamespace($rootNamespace){
        return $this->namespaceOverride($rootNamespace,'controllers_namespace');
    }
}
