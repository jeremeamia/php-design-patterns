<?php

namespace Jeremeamia\PhpPatterns\Test\Structural\Collection;

use Jeremeamia\PhpPatterns\Structural\Collection\CountableTrait;
use Jeremeamia\PhpPatterns\Structural\Collection\GetDataTrait;

class CountableFixture implements \Countable
{
    use CountableTrait, GetDataTrait;

    public function __construct(array $data)
    {
        $this->data = $data;
    }
}
