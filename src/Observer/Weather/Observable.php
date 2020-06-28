<?php declare(strict_types=1);

namespace App\Observer\Weather;

use App\Observer\ObserverCollection;
use App\Observer\Weather\Contract\Observer;
use App\Observer\Weather\Contract\Subject;

abstract class Observable implements Subject
{
    private ObserverCollection $observerCollection;
    private bool               $change = false;

    public function __construct()
    {
        $this->observerCollection = new ObserverCollection();
    }

    protected function getObservers(): array
    {
        return $this->observerCollection->getObservers();
    }

    public function registerObserver(Observer $observer): void
    {
        $this->observerCollection->add($observer);
    }

    public function removeObserver(Observer $observer): void
    {
        $this->observerCollection->remove($observer);
    }

    public function notifyObservers(): void
    {
        if (true === $this->shouldSentNotification()) {
            /** @var Observer $observer */
            foreach ($this->getObservers() as $observer) {
                $observer->update($this);
            }
            $this->updateChange();
        }
    }

    public function updateChange(): void
    {
        $this->change = !$this->change;
    }

    protected function shouldSentNotification(): bool
    {
        return true === $this->change;
    }
}
