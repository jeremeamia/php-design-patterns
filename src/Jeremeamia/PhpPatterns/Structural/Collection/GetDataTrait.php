<?php

namespace Jeremeamia\PhpPatterns\Structural\Collection;

trait GetDataTrait
{
    protected $data = [];

    protected function & getData()
    {
        return $this->data;
    }
}
