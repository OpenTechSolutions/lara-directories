<?php

namespace Opentech\Directories\Console;

class CommandMakeCommand extends \Illuminate\Foundation\Console\ConsoleMakeCommand
{
    use DefaultNamespaceTrait;

    protected function getDefaultNamespace($rootNamespace)
    {
        return $this->namespaceOverride($rootNamespace, 'commands_namespace');
    }
}
