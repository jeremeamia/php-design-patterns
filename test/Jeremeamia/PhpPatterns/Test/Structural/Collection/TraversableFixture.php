<?php

namespace Jeremeamia\PhpPatterns\Test\Structural\Collection;

use Jeremeamia\PhpPatterns\Structural\Collection\TraversableTrait;
use Jeremeamia\PhpPatterns\Structural\Collection\GetDataTrait;

class TraversableFixture implements \IteratorAggregate
{
    use TraversableTrait, GetDataTrait;

    public function __construct(array $data)
    {
        $this->data = $data;
    }
}
