<?php declare(strict_types=1);

namespace App\Observer\Weather;

class WeatherData extends Observable
{
    private float $temperature = 0.0;
    private float $humidity    = 0.0;
    private float $presure     = 0.0;

    public function getTemperature(): float
    {
        return $this->temperature;
    }

    public function getHumidity(): float
    {
        return $this->humidity;
    }

    public function getPresure(): float
    {
        return $this->presure;
    }

    public function measureChanged(): void
    {
        $this->updateChange();
        $this->notifyObservers();
    }

    public function changeMeasurements(float $temperature, float $humidity, float $presure): void
    {
        $this->temperature = $temperature;
        $this->humidity    = $humidity;
        $this->presure     = $presure;
        $this->measureChanged();
    }
}
