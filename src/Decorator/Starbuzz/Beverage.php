<?php declare(strict_types=1);

namespace App\Decorator\Starbuzz;

use App\Decorator\Starbuzz\Enum\ServingSize;

abstract class Beverage
{

    protected string      $description = 'Beverage is not known';
    protected ServingSize $size;

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getSize(): ServingSize
    {
        return $this->size;
    }

    public function setSize(ServingSize $size): void
    {
        $this->size = $size;
    }

    abstract public function getCost(): float;
}
