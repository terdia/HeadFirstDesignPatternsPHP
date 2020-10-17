<?php declare(strict_types=1);

namespace App\Decorator\Starbuzz;

use function sprintf;

class Milk extends CondimentDecorator
{

    public function getCost(): float
    {
        return $this->computeCost() + $this->beverage->getCost();
    }

    public function getDescription(): string
    {
        return sprintf('%s, with milk', $this->beverage->getDescription());
    }

    protected function computeCost(): float
    {
        $cost = 0.0;
        switch ($this->beverage->getSize()->value()) {
            case 'small':
                $cost = .10;
                break;
            case 'medium':
                $cost = .15;
                break;
            case 'large':
                $cost = .20;
                break;
        }

        return $cost;
    }
}
