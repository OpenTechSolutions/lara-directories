<?php

namespace Opentech\Directories\Console;



class ViewMakeCommand extends \Illuminate\Foundation\Console\ViewMakeCommand
{
    use DefaultNamespaceTrait;

    protected function getDefaultNamespace($rootNamespace)
    {
        return $this->namespaceOverride($rootNamespace, 'scopes_namespace');
    }
}
