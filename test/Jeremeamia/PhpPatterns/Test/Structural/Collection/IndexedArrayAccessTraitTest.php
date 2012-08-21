<?php

namespace Jeremeamia\PhpPatterns\Test\Structural\Collection;

class IndexedArrayAccessTraitTest extends \PHPUnit_Framework_TestCase
{
    public function testDataIsStoredCorrectly()
    {
        $collection = new IndexedArrayAccessFixture();
        $collection[] = 'bar1';
        $collection[] = 'bar2';

        $this->assertTrue(isset($collection[0]));
        $this->assertTrue(isset($collection[1]));
        $this->assertEquals('bar1', $collection[0]);
        $this->assertEquals('bar2', $collection[1]);
    }

    public function testDataIsRemovedCorrectly()
    {
        $collection = new IndexedArrayAccessFixture();
        $collection[] = 'bar1';
        $collection[] = 'bar2';

        $this->assertTrue(isset($collection[0]));
        unset($collection[0]);
        $this->assertFalse(isset($collection[0]));
    }

    /**
     * @expectedException \DomainException
     */
    public function testThrowsExceptionWhenKeyIsNotInteger()
    {
        $collection = new IndexedArrayAccessFixture();
        $collection['foo'] = 'bar';
    }
}
