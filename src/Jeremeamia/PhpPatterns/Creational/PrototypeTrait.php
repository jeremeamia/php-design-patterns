<?php

namespace Jeremeamia\PhpPatterns\Creational;

trait PrototypeTrait
{
    public function copy()
    {
        return clone $this;
    }

    public function __clone()
    {
        // Default clone method is not required and assumes shallow copying
    }
}
