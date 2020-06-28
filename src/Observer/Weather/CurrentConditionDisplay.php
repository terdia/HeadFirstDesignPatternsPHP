<?php declare(strict_types=1);

namespace App\Observer\Weather;

use App\Observer\Weather\Contract\DisplayElement;
use App\Observer\Weather\Contract\Observer;
use App\Observer\Weather\Contract\Subject;

use function sprintf;

class CurrentConditionDisplay implements DisplayElement, Observer
{
    private float   $temp     = 0.0;
    private float   $humidity = 0.0;

    public function __construct(Subject $subject)
    {
        $subject->registerObserver($this);
    }

    public function display(): void
    {
        echo sprintf('Current conditions: %sF degrees %s%s humidity <br />', $this->temp, $this->humidity, '%');
    }

    public function update(Subject $subject): void
    {
        if ($subject instanceof WeatherData) {
            $this->temp     = $subject->getTemperature();
            $this->humidity = $subject->getHumidity();
        }
        $this->display();
    }
}
