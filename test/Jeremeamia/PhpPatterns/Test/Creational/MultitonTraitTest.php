<?php

namespace Jeremeamia\PhpPatterns\Test\Creational;

class MultitonTraitTest extends \PHPUnit_Framework_TestCase
{
    public function testAlwaysReturnsSameInstanceByKey()
    {
        $this->assertSame(
            MultitonFixture::getNamedInstance('foo'),
            MultitonFixture::getNamedInstance('foo')
        );

        $this->assertNotSame(
            MultitonFixture::getNamedInstance('foo'),
            MultitonFixture::getNamedInstance('bar')
        );
    }

    public function testAlwaysReturnsSameInstanceForDefault()
    {
        $this->assertSame(
            MultitonFixture::getInstance(),
            MultitonFixture::getNamedInstance()
        );

        $this->assertSame(
            MultitonFixture::getNamedInstance(),
            MultitonFixture::getNamedInstance('__DEFAULT__')
        );
    }
}
