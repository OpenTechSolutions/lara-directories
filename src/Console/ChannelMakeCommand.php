<?php

namespace Opentech\Directories\Console;

class ChannelMakeCommand extends \Illuminate\Foundation\Console\ChannelMakeCommand
{
    use DefaultNamespaceTrait;
    protected function getDefaultNamespace($rootNamespace)
    {
        return $this->namespaceOverride($rootNamespace,'channels_namespace');
    }
}
