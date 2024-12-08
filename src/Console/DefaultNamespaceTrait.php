<?php

namespace Opentech\Directories\Console;

trait DefaultNamespaceTrait
{
    protected function namespaceOverride($rootNamespace, $name): string
    {
        if(!config('directories.console.'.$name))
            return parent::getDefaultNamespace($rootNamespace);

        return $rootNamespace.config('directories.console.'.$name);
    }
}
