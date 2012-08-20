<?php

namespace Jeremeamia\PhpPatterns\Test\Behavioral;

use Jeremeamia\PhpPatterns\Behavioral\ObserverInterface;
use Jeremeamia\PhpPatterns\Behavioral\SubjectInterface;

class ObserverFixture implements ObserverInterface
{
    protected $value;

    public function __construct($value)
    {
        $this->value = (int) $value;
    }

    public function receiveNotification(SubjectInterface $subject, array $data = [])
    {
        $subject[] = $this->value;
    }
}
