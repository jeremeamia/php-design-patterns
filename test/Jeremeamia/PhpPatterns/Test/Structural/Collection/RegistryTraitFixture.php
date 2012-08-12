<?php

namespace Jeremeamia\PhpPatterns\Test\Structural\Collection;

use Jeremeamia\PhpPatterns\Structural\Collection\RegistryTrait;

class RegistryTraitFixture
{
    use RegistryTrait;

    protected $data = [];

    protected function & getData()
    {
        return $this->data;
    }
}
