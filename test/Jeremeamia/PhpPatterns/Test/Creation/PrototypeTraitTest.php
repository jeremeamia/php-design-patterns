<?php

namespace Jeremeamia\PhpPatterns\Test\Creation;

use Jeremeamia\PhpPatterns\Creation\PrototypeTrait;

class PrototypeTraitTest extends \PHPUnit_Framework_TestCase
{
    public function testCopyDoesCloneOperation()
    {
        $prototype = $this->getObjectForTrait('Jeremeamia\PhpPatterns\Creation\PrototypeTrait');
        $copy = $prototype->copy();

        $this->assertInstanceOf(get_class($prototype), $copy);
        $this->assertNotSame($prototype, $copy);
    }
}
