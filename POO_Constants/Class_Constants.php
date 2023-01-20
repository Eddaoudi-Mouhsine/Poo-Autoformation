<?php
class Greeting
{
    const INTRO_MESSAGE = "hello fellow nerds";
}

echo Greeting::INTRO_MESSAGE;
//we can access the const within the class using the self keyword


class Cars
{
    const BEST_CAR = "BUGATTI";
    public function BestCar()
    {
        echo self::BEST_CAR;
    }
}

$car = new  Cars();
echo $car->BestCar();
