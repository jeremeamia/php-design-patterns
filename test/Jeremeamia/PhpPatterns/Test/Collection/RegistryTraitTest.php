<?php

namespace Jeremeamia\PhpPatterns\Test\Collection;

class RegistryTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var RegistryTraitFixture The Registry fixture
     */
    public $registry;

    public function setup()
    {
        $this->registry = new RegistryTraitFixture;
    }

    public function testIfIsEmptyInitially()
    {
        $this->assertTrue($this->registry->isEmpty());
    }

    public function testIfDataIsSetThenNotEmpty()
    {
        $this->assertSame($this->registry, $this->registry->set('foo', 'bar'));
        $this->assertFalse($this->registry->isEmpty());
    }

    public function testIfDataIsStoredCorrectly()
    {
        $this->registry->set('foo1', 'bar1');
        $this->registry->set('foo2', 'bar2');
        $this->assertTrue($this->registry->has('foo1'));
        $this->assertTrue($this->registry->has('foo2'));
        $this->assertEquals('bar1', $this->registry->get('foo1'));
        $this->assertEquals('bar2', $this->registry->get('foo2'));
    }

    public function testIfDataIsRemovedCorrectly()
    {
        $this->registry->set('foo1', 'bar1');
        $this->registry->set('foo2', 'bar2');
        $this->registry->set('foo3', 'bar3');
        $this->assertTrue($this->registry->has('foo1'));
        $this->assertSame($this->registry, $this->registry->remove('foo1'));
        $this->assertFalse($this->registry->has('foo1'));
        $this->assertFalse($this->registry->isEmpty());
        $this->assertSame($this->registry, $this->registry->clear());
        $this->assertTrue($this->registry->isEmpty());
    }

    public function testIfCanGetDataAsArray()
    {
        $this->registry->set('foo1', 'bar1');
        $this->registry->set('foo2', 'bar2');
        $this->registry->set('foo3', 'bar3');
        $expected = array(
            'foo1' => 'bar1',
            'foo2' => 'bar2',
            'foo3' => 'bar3'
        );
        $this->assertEquals($expected, $this->registry->getAll());
    }
}
