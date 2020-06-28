<?php declare(strict_types=1);

namespace App\Strategy\Duck;

class FlyNoWay implements FlyBehaviour
{

    public function fly(): string
    {
        return "I cannot fly";
    }
}
