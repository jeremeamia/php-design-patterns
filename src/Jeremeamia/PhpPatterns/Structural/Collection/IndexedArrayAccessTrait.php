<?php

namespace Jeremeamia\PhpPatterns\Structural\Collection;

Trait IndexedArrayAccessTrait
{
    use AssociativeArrayAccessTrait;

    public function offsetSet($offset, $value)
    {
        if (!is_int($offset) || $offset < 0) {
            throw new \DomainException('The offset must be a integer greater than or equal to zero.');
        }

        $data =& $this->getData();
        $data[$offset] = $value;
    }
}
