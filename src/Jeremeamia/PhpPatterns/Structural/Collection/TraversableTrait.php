<?php

namespace Jeremeamia\PhpPatterns\Structural\Collection;

trait TraversableTrait
{
    use HasDataTrait;

    public function getIterator()
    {
        return new \ArrayIterator($this->getData());
    }
}
