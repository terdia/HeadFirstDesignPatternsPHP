<?php declare(strict_types=1);

namespace App\Decorator\Starbuzz;

use App\Decorator\Starbuzz\Enum\ServingSize;

abstract class CondimentDecorator extends Beverage
{

    protected Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getSize(): ServingSize
    {
        return $this->beverage->getSize();
    }

    abstract public function getCost(): float;

    abstract protected function computeCost(): float;
}
