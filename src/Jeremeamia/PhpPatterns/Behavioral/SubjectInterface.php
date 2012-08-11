<?php

namespace Jeremeamia\PhpPatterns\Behavioral;

interface SubjectInterface
{
    public function addObserver(ObserverInterface $observer);

    public function removeObserver(ObserverInterface $observer);

    public function hasObserver(ObserverInterface $observer);

    public function clearObservers();

    public function notifyObservers(array $data = []);
}
