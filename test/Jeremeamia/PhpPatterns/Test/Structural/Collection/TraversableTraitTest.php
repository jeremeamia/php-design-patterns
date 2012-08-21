<?php

namespace Jeremeamia\PhpPatterns\Test\Structural\Collection;

class TraversableTraitTest extends \PHPUnit_Framework_TestCase
{
    public function testCanForEachOverObject()
    {
        $expected = ['A', 'B', 'C'];
        $traversable = new TraversableFixture($expected);

        $results = [];
        foreach ($traversable as $item) {
            $results[] = $item;
        }

        $this->assertEquals($expected, $results);
    }
}
