<?php

namespace Opentech\Directories\Console;

class CastMakeCommand extends \Illuminate\Foundation\Console\CastMakeCommand
{
    use DefaultNamespaceTrait;

    protected function getDefaultNamespace($rootNamespace){
        return $this->namespaceOverride($rootNamespace, config('casts_namespace'));
    }
}
