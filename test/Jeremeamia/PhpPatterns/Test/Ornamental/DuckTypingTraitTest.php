<?php

namespace Jeremeamia\PhpPatterns\Test\Ornamental;

class DuckTypingTraitTest extends \PHPUnit_Framework_TestCase
{
    public function testRespondsToWorksAsExpected()
    {
        $duck = new DuckTypingFixture();
        $this->assertTrue($duck->respondsTo('count'));
        $this->assertTrue($duck->respondsTo('quack'));
        $this->assertFalse($duck->respondsTo('foo'));
    }
}
