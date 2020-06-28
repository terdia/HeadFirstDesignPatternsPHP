# Observer pattern 

Defines a one-to-many dependency between objects so that when one objects changes state, all its dependents get notified and updated automatically. 

## Design Principle 
* Identify the aspects of your application that vary and separate them from what stay the same
* Program to an interface, not an implementation 
* Favor composition over inheritance 
* **Strive for loosely coupled designs between objets that interacts**

### Usage: 

The example code is for Weather monitoring station (Head first design patterns - Page 38)

```php
    use App\Observer\Weather\CurrentConditionDisplay;
    use App\Observer\Weather\ForcastDisplay;
    use App\Observer\Weather\WeatherData;

    $weatherData = new WeatherData();
    
    $currentConditionDisplay = new CurrentConditionDisplay($weatherData);
    $forcastDisplay          = new ForcastDisplay($weatherData);
    
    // both $currentConditionDisplay and $forcastDisplay get updated automatically
    $weatherData->changeMeasurements(35.9, 10.4, 20.2);
   
    // both $currentConditionDisplay and $forcastDisplay get updated automatically
    $weatherData->changeMeasurements(85.5, 19.4, 70.2);
    
```
