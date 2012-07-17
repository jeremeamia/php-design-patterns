<?php

namespace Jeremeamia\PhpPatterns\Creation;

trait SingleOriginPrototypeTrait
{
    use SingletonTrait, PrototypeTrait
    {
        PrototypeTrait::__clone insteadof SingletonTrait;
    }

    public static function getInstance()
    {
        if (!static::$instance) {
            static::$instance = new static;
        }

        return clone static::$instance;
    }

    public function copy()
    {
        return clone static::$instance;
    }
}
