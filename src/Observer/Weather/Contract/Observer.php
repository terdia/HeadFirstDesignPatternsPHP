<?php declare(strict_types=1);

namespace App\Observer\Weather\Contract;

interface Observer
{

    public function update(Subject $subject): void;
}
