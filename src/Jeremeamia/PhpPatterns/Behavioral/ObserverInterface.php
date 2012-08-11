<?php

namespace Jeremeamia\PhpPatterns\Behavioral;

interface ObserverInterface
{
    public function receiveNotification(SubjectInterface $target, array $data = []);
}
