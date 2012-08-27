<?php

namespace Jeremeamia\PhpPatterns\Behavioral;

interface VisitableInterface
{
    public function accept(VisitorInterface $visitor);
}
