<?php declare(strict_types=1);

namespace App\Decorator\Starbuzz;

class Espresso extends Beverage
{

    protected string $description = 'Have a taste of freshly brewed Espresso';

    public function getCost(): float
    {
        return 10.80;
    }
}
