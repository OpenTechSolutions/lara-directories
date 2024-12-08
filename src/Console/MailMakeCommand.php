<?php

namespace Opentech\Directories\Console;


class MailMakeCommand extends \Illuminate\Foundation\Console\MailMakeCommand
{
    use DefaultNamespaceTrait;

    protected function getDefaultNamespace($rootNamespace)
    {
        return $this->namespaceOverride($rootNamespace, 'mail_namespace');
    }
}
