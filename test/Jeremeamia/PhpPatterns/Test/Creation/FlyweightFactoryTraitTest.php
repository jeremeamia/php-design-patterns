<?php

namespace Jeremeamia\PhpPatterns\Test\Creation;

class FlyweightFactoryTraitTest extends \PHPUnit_Framework_TestCase
{
    public function testAlwaysReturnsSameInstanceByKey()
    {
        $factory = new FlyweightFactoryTraitFixture;

        $this->assertSame(
            $factory->create('Logic'),
            $factory->create('Logic')
        );

        $this->assertSame(
            $factory->create('Runtime'),
            $factory->create('Runtime')
        );

        $this->assertNotSame(
            $factory->create('Logic'),
            $factory->create('Runtime')
        );
    }
}
