<?php declare(strict_types=1);

namespace App\Observer;

use App\Observer\Weather\Contract\Observer;

use function array_search;
use function count;
use function in_array;

class ObserverCollection implements Collection
{

    private array $observers = [];

    public function add(Observer $observer): void
    {
        if (false === $this->contains($observer)) {
            $this->observers[] = $observer;
        }
    }

    public function remove(Observer $observer): void
    {
        if (true === $this->contains($observer)) {
            $key = array_search($observer, $this->observers, false);
            unset($this->observers[$key]);
        }
    }

    public function contains(Observer $observer): bool
    {
        return in_array($observer, $this->observers, true);
    }

    public function count(): int
    {
        return count($this->observers);
    }

    public function getObservers(): array
    {
        return $this->observers;
    }
}
