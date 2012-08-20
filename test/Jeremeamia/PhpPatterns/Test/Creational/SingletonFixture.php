<?php

namespace Jeremeamia\PhpPatterns\Test\Creational;

use Jeremeamia\PhpPatterns\Creational\SingletonTrait;

class SingletonFixture
{
    use SingletonTrait;

    public function __sleep()
    {
        return [];
    }
}
