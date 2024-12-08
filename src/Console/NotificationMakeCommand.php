<?php

namespace Opentech\Directories\Console;



class NotificationMakeCommand extends \Illuminate\Foundation\Console\NotificationMakeCommand
{
    use DefaultNamespaceTrait;

    protected function getDefaultNamespace($rootNamespace)
    {
        return $this->namespaceOverride($rootNamespace, 'notifications_namespace');
    }
}
