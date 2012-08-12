<?php

namespace Jeremeamia\PhpPatterns\Test\Creational;

class SingletonTraitTest extends \PHPUnit_Framework_TestCase
{
    public function testAlwaysReturnsSameInstance()
    {
        $this->assertSame(
            SingletonTraitFixture::getInstance(),
            SingletonTraitFixture::getInstance()
        );
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testCannotBeInstantiateViaConstructor()
    {
        $singleton = new SingletonTraitFixture;
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testCannotClone()
    {
        $singleton1 = SingletonTraitFixture::getInstance();
        $singleton2 = clone $singleton1;
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testCannotUnserializeViaWakeup()
    {
        $singleton1 = SingletonTraitFixture::getInstance();
        $serialized = serialize($singleton1);
        $singleton2 = unserialize($serialized);
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testCannotUnserializeViaInterface()
    {
        $singleton = SingletonTraitFixture::getInstance();
        $result = $singleton->unserialize('foo');
    }
}
