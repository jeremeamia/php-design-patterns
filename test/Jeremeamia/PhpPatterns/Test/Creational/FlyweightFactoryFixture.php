<?php

namespace Jeremeamia\PhpPatterns\Test\Creational;

use Jeremeamia\PhpPatterns\Creational\FlyweightFactoryTrait;
use Jeremeamia\PhpPatterns\Structural\Collection\GetDataTrait;

class FlyweightFactoryFixture
{
    use FlyweightFactoryTrait, GetDataTrait;

    protected function doCreate($name, array $context)
    {
        $class = '\\' . $name . 'Exception';
        return new $class;
    }
}
