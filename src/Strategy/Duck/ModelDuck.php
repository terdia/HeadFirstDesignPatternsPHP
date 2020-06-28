<?php declare(strict_types=1);

namespace App\Strategy\Duck;

class ModelDuck extends Duck
{

    public function __construct()
    {
        $flyBehaviour   = new FlyNoWay();
        $quackBehaviour = new MuteQuack();
        parent::__construct($flyBehaviour, $quackBehaviour);
    }

    public function display(): void
    {
        echo "I'm a model duck";
    }
}
