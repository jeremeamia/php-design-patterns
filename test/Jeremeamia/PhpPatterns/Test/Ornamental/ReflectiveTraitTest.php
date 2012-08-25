<?php

namespace Jeremeamia\PhpPatterns\Test\Ornamental;

use Jeremeamia\PhpPatterns\Ornamental\ReflectiveTrait;

class ReflectiveTraitTest extends \PHPUnit_Framework_TestCase
{
    public function testReflectMemoizesObject()
    {
        $reflectiveObject = $this->getObjectForTrait('Jeremeamia\PhpPatterns\Ornamental\ReflectiveTrait');
        $reflectResult    = $reflectiveObject->reflect();

        $this->assertSame($reflectResult, $reflectiveObject->reflect());
    }
}
