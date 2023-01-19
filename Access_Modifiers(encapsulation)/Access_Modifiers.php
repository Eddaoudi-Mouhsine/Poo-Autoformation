<?php

class Car
{
    public $name;
    protected $model;
    private $price;
}

$car1 = new Car();
$car1->name = "mercedes benz";
// $car1->model = "Union"; //you cant access protected property ,only whitin or inherited one 
// $car1->price = "$63,988";//you cant access private property onlywithin the class in which it got defined
class Vegetables
{
    public $name;
    public $color;
    public $price;
    public function set_name($n)
    {
        $this->name = $n;
    }
    protected function set_color($col)
    {
        $this->color = $col;
    }
    private function set_price($pri)
    {
        $this->price = $pri;
    }
}

$vege1 = new Vegetables();
$vege1->set_name("carrot");
var_dump($vege1->name);
//$vege1->set_color("orange); //will not work cuz its protected;
//$vege1->set_price("$63"); //will not work cuz its private;