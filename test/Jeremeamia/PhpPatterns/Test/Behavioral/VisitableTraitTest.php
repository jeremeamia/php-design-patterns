<?php

namespace Jeremeamia\PhpPatterns\Test\Behavioral;

/**
 * @covers Jeremeamia\PhpPatterns\Behavioral\VisitableTrait
 */
class VisitableTraitTest extends \PHPUnit_Framework_TestCase
{
    public function testAcceptVisitsNodes()
    {
        $visitor = new VisitorFixture();
        $visitable = new VisitableFixture([2, 4, 6, 8]);
        $visitable->accept($visitor);
        $this->assertEquals(20, $visitor->getSum());
    }
}
