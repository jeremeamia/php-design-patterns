<?php

namespace Jeremeamia\PhpPatterns\Test\Behavioral;

use Jeremeamia\PhpPatterns\Behavioral\DecoratorTrait;

class DecoratorTraitTest extends \PHPUnit_Framework_TestCase
{
    public function testCanGetDecorators()
    {
        // Instantiate
        $traitClass = 'Jeremeamia\PhpPatterns\Behavioral\DecoratorTrait';
        $decorator1 = $this->getObjectForTrait($traitClass);
        $decorator2 = $this->getObjectForTrait($traitClass);
        $decorator3 = $this->getObjectForTrait($traitClass);

        // Decorate
        $decorator3->setSubject(new \ArrayObject());
        $decorator2->setSubject($decorator3);
        $decorator1->setSubject($decorator2);

        // Verify
        $expectedDecorators = array($decorator1, $decorator2, $decorator3);
        $this->assertEquals($expectedDecorators, $decorator1->getDecorators());
    }
}
