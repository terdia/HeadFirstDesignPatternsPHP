<?php declare(strict_types=1);

namespace App\Strategy\Duck;

class FlyWithWings implements FlyBehaviour
{

    public function fly(): string
    {
        return "Flying with my wings";
    }
}
