<?php

namespace Jeremeamia\PhpPatterns\Creation;

trait SingletonTrait
{
    protected static $instance;

    /**
     * @return self
     */
    public static function getInstance()
    {
        if (!static::$instance) {
            static::$instance = (new \ReflectionClass(get_called_class()))
                ->newInstanceWithoutConstructor();
        }

        return static::$instance;
    }

    public function __construct()
    {
        throw new \RuntimeException('You may not explicitly instantiate this '
            . 'object, because it is a singleton.');
    }

    public function __clone()
    {
        throw new \RuntimeException('You may not clone this object, because it '
            . 'is a singleton.');
    }

    public function __wakeup()
    {
        throw new \RuntimeException('You may not unserialize this object, '
            . 'because it is a singleton.');
    }

    public function unserialize($serialized_data)
    {
        throw new \RuntimeException('You may not unserialize this object, '
            . 'because it is a singleton.');
    }
}
