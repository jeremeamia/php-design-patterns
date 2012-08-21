<?php

namespace Jeremeamia\PhpPatterns\Structural\Collection;

trait MagicModifiersTrait
{
    use HasDataTrait;

    public function __get($key)
    {
        if (!$this->__isset($key)) {
            throw new \OutOfBoundsException("The key \"{$key}\" does not exist.");
        }

        return $this->getData()[$key];
    }

    public function __set($key, $value)
    {
        $data =& $this->getData();
        $data[$key] = $value;
    }

    public function __isset($key)
    {
        return array_key_exists($key, $this->getData());
    }

    public function __unset($key)
    {
        $data =& $this->getData();
        unset($data[$key]);
    }
}
