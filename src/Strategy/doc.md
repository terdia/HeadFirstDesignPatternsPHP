# Strategy pattern 

Defines a family of algorithms, encapsulate each one and make them interchangeable.Strategy lets the algorithm vary independently of client that use it. 

## Design Principle 
* Identify the aspects of your application that vary and separate them from what stay the same
* Program to an interface, not an implementation 
* Favor composition over inheritance 

### Usage: 

The example code is for a simple SimUDuck app (Head first design patterns - Page 2)

```php
    use App\Strategy\Duck\FlyRocketPowered;
    use App\Strategy\Duck\MallardDuck;
    use App\Strategy\Duck\ModelDuck;

    $duck = new MallardDuck();
    $duck->fly();
    $duck->quack();
    $duck->display();
    $duck->swim();
    
   // model duck don't know how to fly at creation 
    $model = new ModelDuck();
    $model->fly();
    $model->quack();
    
    // enable model duck to fly using a rocket 
    $model->setFlyBehaviour(new FlyRocketPowered());
    $model->fly();
    $model->display();
    $model->swim();
    
```
