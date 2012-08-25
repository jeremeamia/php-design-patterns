<?php

namespace Jeremeamia\PhpPatterns\Test\Structural\Collection;

use Jeremeamia\PhpPatterns\Structural\Collection\IteratorTrait;
use Jeremeamia\PhpPatterns\Structural\Collection\GetDataTrait;

class IteratorFixture implements \Iterator
{
    use IteratorTrait, GetDataTrait;

    public function __construct(array $data)
    {
        $this->data = $data;
    }
}
