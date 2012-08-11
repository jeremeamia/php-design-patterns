<?php

namespace Jeremeamia\PhpPatterns\Creational;

trait MultitonTrait
{
    use SingletonTrait;

    public static function getInstance()
    {
        return static::getNamedInstance();
    }

    public static function getNamedInstance($key = '__DEFAULT__')
    {
        if (!isset(static::$instance[$key])) {
            if (!static::$instance) {
                static::$instance = [];
            }
            static::$instance[$key] = (new \ReflectionClass(get_called_class()))
                ->newInstanceWithoutConstructor();
        }

        return static::$instance[$key];
    }
}
