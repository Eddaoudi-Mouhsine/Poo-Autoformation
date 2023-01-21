<?php
//Static methods can be called directly - without creating an instance of the class first.

class Greeting
{
    public static function message()
    {
        echo "hello from mars,Ya its not a lie xd";
    }
}

Greeting::message();

class Hello
{
    public static function advertising()
    {

        echo "hello world inside the static method within class hello ";
    }
    public function __construct()
    {
        self::advertising();
    }
}
echo "<br>";
$MessageOfTheDay = new Hello();

class  staff
{
    public static function message()
    {
        echo "i should respect my establishement";
    }
}

class student
{
    public function rule()
    {
        Staff::message();
    }
}
echo "<br>";
$newStudent = new student();
$newStudent->rule();

class Parents
{
    protected static function message()
    {
        return " Martha & johnny";
    }
}

class Kids extends Parents
{
    public $get_Name;
    public function __construct()
    {
        return $this->get_Name = parent::message();
    }
}
echo "<br>";
$kid1 = new Kids();
echo $kid1->get_Name;
