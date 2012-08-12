<?php

namespace Jeremeamia\PhpPatterns\Test\Creational;

use Jeremeamia\PhpPatterns\Creational\SingletonTrait;

class SingletonTraitFixture
{
    use SingletonTrait;

    public function __sleep()
    {
        return [];
    }
}
