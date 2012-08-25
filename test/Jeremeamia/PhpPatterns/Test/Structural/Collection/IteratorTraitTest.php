<?php

namespace Jeremeamia\PhpPatterns\Test\Structural\Collection;

class IteratorTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var IteratorFixture
     */
    protected $iterator;

    protected function setup()
    {
        $this->iterator = new IteratorFixture(['A', 'B', 'C']);
    }

    public function testIteration()
    {
        $this->assertEquals(3, iterator_count($this->iterator));
    }

    public function testBasicOperations()
    {
        $this->iterator->rewind();
        $this->assertTrue($this->iterator->valid());
        $this->assertEquals('A', $this->iterator->current());
        $this->assertEquals(0, $this->iterator->key());

        $this->iterator->next();
        $this->iterator->next();
        $this->assertTrue($this->iterator->valid());
        $this->assertEquals('C', $this->iterator->current());
        $this->assertEquals(2, $this->iterator->key());

        $this->iterator->next();
        $this->assertFalse($this->iterator->valid());

        $this->iterator->prev();
        $this->iterator->prev();
        $this->assertTrue($this->iterator->valid());
        $this->assertEquals('B', $this->iterator->current());
        $this->assertEquals(1, $this->iterator->key());

        $this->iterator->seek(2);
        $this->assertTrue($this->iterator->valid());
        $this->assertEquals('C', $this->iterator->current());
        $this->assertEquals(2, $this->iterator->key());
    }

    /**
     * @expectedException \OutOfBoundsException
     */
    public function testSeekingToInvalidKeyThrowsException()
    {
        $this->iterator->seek(3);
    }
}
