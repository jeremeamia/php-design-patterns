<?php

namespace Jeremeamia\PhpPatterns\Test\Creation;

use Jeremeamia\PhpPatterns\Creational\SingletonTrait;

class SingletonTraitFixture
{
    use SingletonTrait;

    public function __sleep()
    {
        return [];
    }
}
