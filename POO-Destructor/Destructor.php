<?php
class Fruit
{
    public $name;
    public $color;
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function __destruct()
    {
        echo ("the fruit is {$this->name} and of  {$this->color}  color");
    }
}

$fruit1 = new Fruit("mango", "orange");

//destructor always runs at the end of the class you create !