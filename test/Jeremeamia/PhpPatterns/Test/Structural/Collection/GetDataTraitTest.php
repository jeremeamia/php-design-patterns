<?php

namespace Jeremeamia\PhpPatterns\Test\Structural\Collection;

class GetDataTraitTest extends \PHPUnit_Framework_TestCase
{
    public function testGetDataReturnsArray()
    {
        $object = $this->getObjectForTrait('Jeremeamia\PhpPatterns\Structural\Collection\GetDataTrait');
        $class  = new \ReflectionClass($object);
        $method = $class->getMethod('getData');
        $method->setAccessible(true);

        $this->assertSame([], $method->invoke($object));
    }
}
