<?php

namespace Jeremeamia\PhpPatterns\Ornamental;

trait DuckTypingTrait
{
    public function respondsTo($method)
    {
        return is_callable([$this, $method]);
    }
}
