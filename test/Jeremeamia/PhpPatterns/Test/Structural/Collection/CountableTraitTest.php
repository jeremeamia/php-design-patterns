<?php

namespace Jeremeamia\PhpPatterns\Test\Structural\Collection;

class CountableTraitTest extends \PHPUnit_Framework_TestCase
{
    public function testCountWorks()
    {
        $countable = new CountableFixture(['A', 'B', 'C']);
        $this->assertEquals(3, count($countable));
    }
}
