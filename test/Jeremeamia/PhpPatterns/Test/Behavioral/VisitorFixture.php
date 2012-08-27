<?php

namespace Jeremeamia\PhpPatterns\Test\Behavioral;

use Jeremeamia\PhpPatterns\Behavioral\VisitorInterface;

class VisitorFixture implements VisitorInterface
{
    protected $sum = 0;

    public function getSum()
    {
        return $this->sum;
    }

    public function visit($node)
    {
        $this->sum += (int) $node;
    }
}
