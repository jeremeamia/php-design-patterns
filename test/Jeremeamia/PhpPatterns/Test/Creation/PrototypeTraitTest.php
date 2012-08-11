<?php

namespace Jeremeamia\PhpPatterns\Test\Creation;

use Jeremeamia\PhpPatterns\Creational\PrototypeTrait;

class PrototypeTraitTest extends \PHPUnit_Framework_TestCase
{
    public function testCopyDoesCloneOperation()
    {
        /** @var $prototype PrototypeTrait */
        $prototype = $this->getObjectForTrait('Jeremeamia\PhpPatterns\Creational\PrototypeTrait');
        $copy = $prototype->copy();

        $this->assertInstanceOf(get_class($prototype), $copy);
        $this->assertNotSame($prototype, $copy);
    }
}
