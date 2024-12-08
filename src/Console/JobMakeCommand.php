<?php

namespace Opentech\Directories\Console;



class JobMakeCommand extends \Illuminate\Foundation\Console\JobMakeCommand
{
    use DefaultNamespaceTrait;

    protected function getDefaultNamespace($rootNamespace)
    {
        return $this->namespaceOverride($rootNamespace, 'jobs_namespace');
    }
}
