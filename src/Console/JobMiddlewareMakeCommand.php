<?php

namespace Opentech\Directories\Console;



class JobMiddlewareMakeCommand extends \Illuminate\Foundation\Console\JobMiddlewareMakeCommand
{
    use DefaultNamespaceTrait;

    protected function getDefaultNamespace($rootNamespace)
    {
        return $this->namespaceOverride($rootNamespace, 'job_middlewares_namespace');
    }
}
