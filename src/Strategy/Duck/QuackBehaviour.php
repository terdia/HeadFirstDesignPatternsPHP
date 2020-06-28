<?php declare(strict_types=1);


namespace App\Strategy\Duck;


interface QuackBehaviour
{
    public function quark(): string;
}
