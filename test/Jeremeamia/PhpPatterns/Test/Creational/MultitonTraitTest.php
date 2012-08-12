<?php

namespace Jeremeamia\PhpPatterns\Test\Creational;

class MultitonTraitTest extends \PHPUnit_Framework_TestCase
{
    public function testAlwaysReturnsSameInstanceByKey()
    {
        $this->assertSame(
            MultitonTraitFixture::getNamedInstance('foo'),
            MultitonTraitFixture::getNamedInstance('foo')
        );

        $this->assertNotSame(
            MultitonTraitFixture::getNamedInstance('foo'),
            MultitonTraitFixture::getNamedInstance('bar')
        );
    }

    public function testAlwaysReturnsSameInstanceForDefault()
    {
        $this->assertSame(
            MultitonTraitFixture::getInstance(),
            MultitonTraitFixture::getNamedInstance()
        );

        $this->assertSame(
            MultitonTraitFixture::getNamedInstance(),
            MultitonTraitFixture::getNamedInstance('__DEFAULT__')
        );
    }
}
