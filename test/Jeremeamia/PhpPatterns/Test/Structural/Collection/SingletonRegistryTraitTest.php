<?php

namespace Jeremeamia\PhpPatterns\Test\Structural\Collection;

class SingletonRegistryTraitTest extends \PHPUnit_Framework_TestCase
{
    public function testGetTheSameValueAndInstance()
    {
        $registry1 = SingletonRegistryFixture::getInstance();
        $registry1->set('foo', 'bar');
        $registry2 = SingletonRegistryFixture::getInstance();

        $this->assertSame($registry1, $registry2);
        $this->assertEquals('bar', $registry2->get('foo'));
    }
}
