<?php

namespace Jeremeamia\PhpPatterns\Test\Behavioral;

use Jeremeamia\PhpPatterns\Behavioral\ProxyTrait;

class ProxyTraitTest extends \PHPUnit_Framework_TestCase
{
    public function testGetAndSetSubjectOfProxy()
    {
        /** @var $proxy \Jeremeamia\PhpPatterns\Behavioral\ProxyTrait */
        $proxy = $this->getObjectForTrait('Jeremeamia\PhpPatterns\Behavioral\ProxyTrait');
        $subject = new \ArrayObject();
        $setResult = $proxy->setSubject($subject);
        $getResult = $proxy->getSubject();

        $this->assertSame($proxy, $setResult);
        $this->assertSame($subject, $getResult);
    }

    public function testCanCallMethodsByProxy()
    {
        /** @var $proxy \Jeremeamia\PhpPatterns\Behavioral\ProxyTrait */
        $proxy = $this->getObjectForTrait('Jeremeamia\PhpPatterns\Behavioral\ProxyTrait');
        $proxy->setSubject(new \ArrayObject(array('A', 'B', 'C')));

        $this->assertEquals(3, $proxy->count());
    }
}
