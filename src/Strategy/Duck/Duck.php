<?php declare(strict_types=1);

namespace App\Strategy\Duck;

abstract class Duck
{
    private FlyBehaviour   $flyBehaviour;
    private QuackBehaviour $quackBehaviour;

    public function __construct(FlyBehaviour $flyBehaviour, QuackBehaviour $quackBehaviour)
    {
        $this->flyBehaviour   = $flyBehaviour;
        $this->quackBehaviour = $quackBehaviour;
    }

    public function fly(): void
    {
        echo $this->flyBehaviour->fly();
    }

    public function quack(): void
    {
        echo $this->quackBehaviour->quark();
    }

    public function swim(): void
    {
        echo "All ducks float, even decoys!";
    }

    public function setFlyBehaviour(FlyBehaviour $flyBehaviour): void
    {
        $this->flyBehaviour = $flyBehaviour;
    }

    public function setQuackBehaviour(QuackBehaviour $quackBehaviour): void
    {
        $this->quackBehaviour = $quackBehaviour;
    }

    abstract public function display(): void;
}
