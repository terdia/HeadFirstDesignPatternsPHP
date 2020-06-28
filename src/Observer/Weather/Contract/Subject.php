<?php declare(strict_types=1);

namespace App\Observer\Weather\Contract;

interface Subject
{

    public function registerObserver(Observer $observer): void;

    public function removeObserver(Observer $observer): void;

    public function notifyObservers();

    public function updateChange(): void;
}
