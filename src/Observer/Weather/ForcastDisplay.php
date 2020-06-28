<?php declare(strict_types=1);

namespace App\Observer\Weather;

use App\Observer\Weather\Contract\DisplayElement;
use App\Observer\Weather\Contract\Observer;
use App\Observer\Weather\Contract\Subject;

class ForcastDisplay implements Observer, DisplayElement
{
    private float   $lastPresure     = 0.0;
    private float   $currrentPresure = 29.92;

    public function __construct(Subject $subject)
    {
        $subject->registerObserver($this);
    }

    public function display(): void
    {
        if ($this->lastPresure > $this->currrentPresure) {
            echo 'Weather condition is improving <br />';
        } else {
            echo 'Weather condition is getting worse <br />';
        }
    }

    public function update(Subject $subject): void
    {
        if ($subject instanceof WeatherData) {
            $this->lastPresure     = $this->currrentPresure;
            $this->currrentPresure = $subject->getPresure();
        }
        $this->display();
    }
}
