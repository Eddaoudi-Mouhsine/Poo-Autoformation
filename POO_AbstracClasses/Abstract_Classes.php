<?php
//Abstract classes and methods are when the parent class has a named method,
// but need its child class(es) to fill out the tasks.

//An abstract class is a class that contains at least one abstract method. 
//An abstract method is a method that is declared, but not implemented in the code.

abstract class Book
{
    abstract public function author($name);
    abstract public function title($title);
    abstract public function description($detail);
}
//you can say book is an abstract class for once it has 3 abstract methods ,

//The child class method must be defined with the same name and it redeclares the parent abstract method
//The child class method must be defined with the same or a less restricted access modifier
//The number of required arguments must be the same. However, the child class may have optional arguments in addition

abstract class Animes
{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function Advertising();
}
class Overlord extends Animes
{
    public function Advertising()
    {
        echo "the best isekai anime currently {$this->name}";
    }
}
class MushekouTeinsei extends Animes
{
    public function Advertising()
    {
        return "lets be honest,nothing come close {$this->name}";
    }
}
class LogHorizontal extends Animes
{

    public function Advertising()
    {
        return "the goat of all isekai anime is {$this->name}";
    }
}

$overlord = new Overlord("Overlord Ainz");
$mushekou = new MushekouTeinsei("mushekou teinsen");
$logHorizon = new LogHorizontal("Log Horizontal");
echo $overlord->Advertising();
echo "<br>";
echo $mushekou->Advertising();
echo "<br>";
echo $logHorizon->Advertising();


abstract class Staff
{
    abstract public function info($name);
}

class Student extends Staff
{
    protected $name;
    protected $age;
    protected $score;
    public function info($name, $age = 25, $score = 90)
    {
        if ($name == "Zobir" && $age == 28) {
            return "zobir mvp";
        } elseif ($name == "amine" && $age == 23 && $score == 85) {
            return "amine second mvp";
        } else {
            return "could be anyone ";
        }
    }
}

$random = new Student();
echo "<br>";
echo $random->info("Zobir", 28, 85);
