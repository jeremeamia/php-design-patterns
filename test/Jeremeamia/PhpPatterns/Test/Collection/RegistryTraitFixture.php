<?php

namespace Jeremeamia\PhpPatterns\Test\Collection;

use Jeremeamia\PhpPatterns\Structural\RegistryTrait;

class RegistryTraitFixture
{
    use RegistryTrait;

    protected $data = [];

    protected function & getData()
    {
        return $this->data;
    }
}
