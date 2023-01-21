<?php
//Interfaces allow you to specify what methods a class should implement.


//Interfaces make it easy to use a variety of different classes in the same way.
//When one or more classes use the same interface, it is referred to as "polymorphism".
interface Car
{
    public function Get_Name($name, $color);
    public function Get_Price($estimatedPrice);
    public function advertising($message);
}
//Interfaces cannot have properties, while abstract classes can
//All interface methods must be public, while abstract class methods is public or protected
//All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword
// is not necessary
//Classes can implement an interface while inheriting from another class at the same time
//A class that implements an interface must implement all of the interface's methods.

interface  Animal
{
    public function make_sound($sound);
}

class Cat implements Animal
{
    public function make_sound($sound = "meow", $age = 8)
    {
        return "this animal says {$sound} and its age is {$age}";
    }
}

class Dog implements Animal
{
    public function make_sound($sound = "woof", $age = 9)
    {
        return "this animal says {$sound} and its age is {$age}";
    }
}
echo "<br>";
$cat = new Cat();
echo "<br>";
$dog = new Dog();

class Cow implements Animal
{
    public function  make_sound($sound = "mooooow", $age = 22)
    {
        return "this animal says {$sound} and its age {$age}";
    }
}
echo "<br>";
$cow = new Cow();

$animals = array($cow, $dog, $cat);
foreach ($animals as $animal) {
    echo $animal->make_sound();
}
