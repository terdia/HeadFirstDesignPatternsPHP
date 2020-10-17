<?php declare(strict_types=1);

namespace App\Decorator\Starbuzz;

use function sprintf;
use function ucfirst;

class Mocha extends CondimentDecorator
{

    public function getCost(): float
    {
        return $this->computeCost() + $this->beverage->getCost();
    }

    public function getDescription(): string
    {
        return ucfirst(sprintf('%s, mocha', $this->beverage->getDescription()));
    }

    protected function computeCost(): float
    {
        $cost = 0.0;
        switch ($this->beverage->getSize()->value()) {
            case 'small':
                $cost = 1.0;
                break;
            case 'medium':
                $cost = 1.25;
                break;
            case 'large':
                $cost = 1.45;
                break;
        }

        return $cost;
    }
}
