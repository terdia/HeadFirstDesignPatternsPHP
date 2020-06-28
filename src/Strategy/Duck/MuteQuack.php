<?php declare(strict_types=1);

namespace App\Strategy\Duck;

class MuteQuack implements QuackBehaviour
{

    public function quark(): string
    {
        return "Silence";
    }
}
