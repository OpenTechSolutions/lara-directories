<?php

namespace Opentech\Directories\Console;



class ModelMakeCommand extends \Illuminate\Foundation\Console\ModelMakeCommand
{
    use DefaultNamespaceTrait;

    protected function getDefaultNamespace($rootNamespace)
    {
        return $this->namespaceOverride($rootNamespace, 'models_namespace');
    }
}
