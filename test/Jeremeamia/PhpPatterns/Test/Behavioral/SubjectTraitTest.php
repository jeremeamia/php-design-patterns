<?php

namespace Jeremeamia\PhpPatterns\Test\Behavioral;

use Jeremeamia\PhpPatterns\Behavioral\SubjectTrait;

class SubjectTraitTest extends \PHPUnit_Framework_TestCase
{
    public function testCanAddAndRemoveObservers()
    {
        $subject = new SubjectFixture();
        $observer = $this->getMock('Jeremeamia\PhpPatterns\Behavioral\ObserverInterface');

        $this->assertSame($subject, $subject->addObserver($observer));
        $this->assertTrue($subject->hasObserver($observer));
        $this->assertSame($subject, $subject->removeObserver($observer));
        $this->assertFalse($subject->hasObserver($observer));
    }

    public function testCanRemoveAllObservers()
    {
        $subject = new SubjectFixture();
        $subject->addObserver($this->getMock('Jeremeamia\PhpPatterns\Behavioral\ObserverInterface'));
        $subject->addObserver($this->getMock('Jeremeamia\PhpPatterns\Behavioral\ObserverInterface'));
        $subject->addObserver($this->getMock('Jeremeamia\PhpPatterns\Behavioral\ObserverInterface'));

        $this->assertEquals(3, $subject->getObserverStorage()->count());
        $this->assertSame($subject, $subject->clearObservers());
        $this->assertEquals(0, $subject->getObserverStorage()->count());
    }

    public function testCanNotifyObservers()
    {
        $subject = new SubjectFixture();
        $subject->addObserver(new ObserverFixture('A'));
        $subject->addObserver(new ObserverFixture('B'));
        $subject->addObserver(new ObserverFixture('C'));

        $subject->notifyObservers();
        $this->assertEquals(3, $subject->count());
    }
}
