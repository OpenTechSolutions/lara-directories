<?php

namespace Opentech\Directories\Console;



class EventMakeCommand extends \Illuminate\Foundation\Console\EventMakeCommand
{
    use DefaultNamespaceTrait;

    protected function getDefaultNamespace($rootNamespace)
    {
        return $this->namespaceOverride($rootNamespace, 'events_namespace');
    }
}
