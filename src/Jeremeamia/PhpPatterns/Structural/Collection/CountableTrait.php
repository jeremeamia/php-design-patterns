<?php

namespace Jeremeamia\PhpPatterns\Structural\Collection;

trait CountableTrait
{
    use HasDataTrait;

    public function count()
    {
        return count($this->getData());
    }
}
