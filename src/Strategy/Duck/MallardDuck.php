<?php declare(strict_types=1);

namespace App\Strategy\Duck;

class MallardDuck extends Duck
{
    public function __construct()
    {
        $flyBehaviour   = new FlyWithWings();
        $quackBehaviour = new Quack();
        parent::__construct($flyBehaviour, $quackBehaviour);
    }

    public function display(): void
    {
        echo "I am a real Mallard duck";
    }
}
