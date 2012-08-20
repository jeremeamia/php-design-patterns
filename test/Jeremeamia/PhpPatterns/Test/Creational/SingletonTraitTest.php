<?php

namespace Jeremeamia\PhpPatterns\Test\Creational;

class SingletonTraitTest extends \PHPUnit_Framework_TestCase
{
    public function testAlwaysReturnsSameInstance()
    {
        $this->assertSame(
            SingletonFixture::getInstance(),
            SingletonFixture::getInstance()
        );
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testCannotBeInstantiateViaConstructor()
    {
        $singleton = new SingletonFixture;
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testCannotClone()
    {
        $singleton1 = SingletonFixture::getInstance();
        $singleton2 = clone $singleton1;
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testCannotUnserializeViaWakeup()
    {
        $singleton1 = SingletonFixture::getInstance();
        $serialized = serialize($singleton1);
        $singleton2 = unserialize($serialized);
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testCannotUnserializeViaInterface()
    {
        $singleton = SingletonFixture::getInstance();
        $result = $singleton->unserialize('foo');
    }
}
