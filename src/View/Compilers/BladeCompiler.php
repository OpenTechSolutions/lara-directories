<?php

namespace Opentech\Directories\View\Compilers;


class BladeCompiler extends \Illuminate\View\Compilers\BladeCompiler
{
    protected function compileComponentTags($value)
    {
        if (! $this->compilesComponentTags) {
            return $value;
        }

        return (new ComponentTagCompiler(
            $this->classComponentAliases, $this->classComponentNamespaces, $this
        ))->compile($value);
    }
}
