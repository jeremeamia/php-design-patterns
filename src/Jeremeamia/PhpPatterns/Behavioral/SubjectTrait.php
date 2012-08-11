<?php

namespace Jeremeamia\PhpPatterns\Behavioral;

trait SubjectTrait
{
    /**
     * @var \SplObjectStorage Object storage for observers
     */
    protected $observerStorage;

    public function addObserver(ObserverInterface $observer)
    {
        $this->getObserverStorage()->attach($observer);

        return $this;
    }

    public function removeObserver(ObserverInterface $observer)
    {
        $this->getObserverStorage()->detach($observer);

        return $this;
    }

    public function hasObserver(ObserverInterface $observer)
    {
        return $this->getObserverStorage()->contains($observer);
    }

    public function clearObservers()
    {
        $this->observerStorage = new \SplObjectStorage();

        return $this;
    }

    public function notifyObservers(array $data = [])
    {
        /** @var $observer ObserverInterface */
        foreach ($this->getObserverStorage() as $observer) {
            $observer->receiveNotification($this, $data);
        }

        return $this;
    }

    public function getObserverStorage()
    {
        if (!($this->observerStorage instanceof \SplObjectStorage)) {
            $this->observerStorage = new \SplObjectStorage();
        }

        return $this->observerStorage;
    }
}
