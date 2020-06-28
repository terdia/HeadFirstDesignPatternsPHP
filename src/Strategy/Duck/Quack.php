<?php declare(strict_types=1);

namespace App\Strategy\Duck;

class Quack implements QuackBehaviour
{

    public function quark(): string
    {
        return "Quack";
    }
}
