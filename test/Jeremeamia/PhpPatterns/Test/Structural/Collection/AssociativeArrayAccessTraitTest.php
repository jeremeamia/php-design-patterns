<?php

namespace Jeremeamia\PhpPatterns\Test\Structural\Collection;

class AssociativeArrayAccessTraitTest extends \PHPUnit_Framework_TestCase
{
    public function testDataIsStoredCorrectly()
    {
        $collection = new AssociativeArrayAccessFixture();
        $collection['foo1'] = 'bar1';
        $collection['foo2'] = 'bar2';

        $this->assertTrue(isset($collection['foo1']));
        $this->assertTrue(isset($collection['foo2']));
        $this->assertEquals('bar1', $collection['foo1']);
        $this->assertEquals('bar2', $collection['foo2']);
    }

    public function testDataIsRemovedCorrectly()
    {
        $collection = new AssociativeArrayAccessFixture();
        $collection['foo1'] = 'bar1';
        $collection['foo2'] = 'bar2';

        $this->assertTrue(isset($collection['foo1']));
        unset($collection['foo1']);
        $this->assertFalse(isset($collection['foo1']));
    }

    /**
     * @expectedException \OutOfBoundsException
     */
    public function testThrowsExceptionOnOutOfBounds()
    {
        $collection = new AssociativeArrayAccessFixture();
        $collection['foo1'];
    }
}
