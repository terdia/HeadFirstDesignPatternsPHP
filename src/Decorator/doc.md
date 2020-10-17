# Decorator pattern 

The Decorator pattern attaches additional responsibilities to an object dynamically. Decorator provides a flexible alternative to subclassing for extending functionality.

## Design Principle 
* Identify the aspects of your application that vary and separate them from what stay the same
* Program to an interface, not an implementation 
* Favor composition over inheritance 
* Strive for loosely coupled designs between objets that interacts
* **Classes should be open for extension, but closed for modification (Open close principle)**


### Usage: 

Starbuzz coffee usecase. Starbuzz coffee currently have a system that allows a customer to buy different type of coffees e.g DarkRoast, Espresso. Our goal is to extend the current implementaion so that a user can also ask for several condiments like streamed milk, soy, and mocha (otherwise know as chocolate), and have it all topped off with whipped milk. Starbuzz charges a bit for each of these, so they really need to get it built into their order system. 

```php
use App\Decorator\Starbuzz\Enum\ServingSize;
use App\Decorator\Starbuzz\Espresso;
use App\Decorator\Starbuzz\Milk;
use App\Decorator\Starbuzz\Mocha;

// cutsomer wants a medium size cup espresso, we start with our Espresso object 
$beverage = new Espresso(); // cost 10.80
$beverage->setSize(ServingSize::medium());

//The customer wants mocha, so we create a Mocha object and wrap it around the Espresso.
// the mocha object is a decorator. Its type mirrors the object it is decorating in this case, a Beverage
//so Mocha object has cost() method too, and through polymorphism we can treat any Bevarage wrapped in mocha as a Beverage, too (because Mocha is a type of Beverage)
$beverage = new Mocha($beverage); //cost 1.25

// The customet also wants Milk, so we create a Milk object decorator and wrap Mocha with it.
$beverage = new Milk($beverage); //cost .15 for large size

//The decorator adds its own behavior either before and/or after delegating to the object it decorates to do the rest of the job, in this example to calculate the cost after adding Mocha or milk we first call the cost method of the decorator and then add the cost of the object it decorates, like so $this->computeCost() + $this->beverage->getCost()

echo sprintf('%s for $%s', $beverage->getDescription(), $beverage->getCost());
//output: Have a taste of freshly brewed Espresso, mocha, with milk for $12.2
    
```
