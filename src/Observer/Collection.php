<?php declare(strict_types=1);

namespace App\Observer;

use App\Observer\Weather\Contract\Observer;

interface Collection
{

    public function add(Observer $observer): void;

    public function remove(Observer $observer): void;

    public function contains(Observer $observer): bool;

    public function count(): int;

}
