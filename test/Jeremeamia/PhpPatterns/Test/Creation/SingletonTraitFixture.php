<?php

namespace Jeremeamia\PhpPatterns\Test\Creation;

use Jeremeamia\PhpPatterns\Creation\SingletonTrait;

class SingletonTraitFixture
{
    use SingletonTrait;

    public function __sleep()
    {
        return [];
    }
}
