<?php

namespace Jeremeamia\PhpPatterns\Behavioral;

use Jeremeamia\PhpPatterns\Structural\Collection\TraversableTrait;

trait VisitableTrait
{
    use TraversableTrait;

    public function accept(VisitorInterface $visitor)
    {
        foreach ($this->getIterator() as $item) {
            $visitor->visit($item);
        }

        return $this;
    }
}
