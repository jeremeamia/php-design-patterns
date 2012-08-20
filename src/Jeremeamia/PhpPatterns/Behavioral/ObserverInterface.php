<?php

namespace Jeremeamia\PhpPatterns\Behavioral;

interface ObserverInterface
{
    public function receiveNotification(SubjectInterface $subject, array $data = []);
}
