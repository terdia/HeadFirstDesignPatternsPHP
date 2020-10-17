<?php declare(strict_types=1);

namespace App\Decorator\Starbuzz;

class DarkRoast extends Beverage
{

    protected string $description = 'Dark roast is the main thing';

    public function getCost(): float
    {
        return 9.80;
    }
}
