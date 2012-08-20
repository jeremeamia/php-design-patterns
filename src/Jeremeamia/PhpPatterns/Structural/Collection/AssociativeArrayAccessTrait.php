<?php

namespace Jeremeamia\PhpPatterns\Structural\Collection;

trait AssociativeArrayAccessTrait
{
    use HasDataTrait;

    public function offsetGet($offset)
    {
        if (!$this->offsetExists($offset)) {
            throw new \OutOfBoundsException("The offset \"{$offset}\" does not exist.");
        }

        return $this->getData()[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $data =& $this->getData();
        $data[$offset] = $value;
    }

    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->getData());
    }

    public function offsetUnset($offset)
    {
        $data =& $this->getData();
        unset($data[$offset]);
    }
}
