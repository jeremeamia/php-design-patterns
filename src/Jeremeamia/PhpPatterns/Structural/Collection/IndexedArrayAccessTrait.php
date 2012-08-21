<?php

namespace Jeremeamia\PhpPatterns\Structural\Collection;

Trait IndexedArrayAccessTrait
{
    use AssociativeArrayAccessTrait;

    public function offsetSet($offset, $value)
    {
        $data =& $this->getData();

        if (null === $offset) {
            $offset = max(array_keys($data) ?: [-1]) + 1;
        } elseif (!is_int($offset) || $offset < 0) {
            throw new \DomainException('The offset must be a integer greater than or equal to zero.');
        }

        $data[$offset] = $value;
    }
}
