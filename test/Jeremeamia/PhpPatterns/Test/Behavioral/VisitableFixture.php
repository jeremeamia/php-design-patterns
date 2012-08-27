<?php

namespace Jeremeamia\PhpPatterns\Test\Behavioral;

use Jeremeamia\PhpPatterns\Behavioral\VisitableInterface;
use Jeremeamia\PhpPatterns\Behavioral\VisitableTrait;
use Jeremeamia\PhpPatterns\Structural\Collection\GetDataTrait;

class VisitableFixture implements VisitableInterface, \IteratorAggregate
{
    use GetDataTrait, VisitableTrait;

    public function __construct(array $data)
    {
        $this->data = $data;
    }
}
