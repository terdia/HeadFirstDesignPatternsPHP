<?php declare(strict_types=1);

namespace App\Strategy\Duck;

class FlyRocketPowered implements FlyBehaviour
{

    public function fly(): string
    {
        return "I am flying with a rocket, yep!";
    }
}
