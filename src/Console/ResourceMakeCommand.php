<?php

namespace Opentech\Directories\Console;



class ResourceMakeCommand extends \Illuminate\Foundation\Console\ResourceMakeCommand
{
    use DefaultNamespaceTrait;

    protected function getDefaultNamespace($rootNamespace)
    {
        return $this->namespaceOverride($rootNamespace, 'resources_namespace');
    }
}
