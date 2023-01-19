<?php
class Manga
{

    public $name;
    public $author;
    public $PublishedYear;
    public function __construct($name, $author, $PublishedYear)
    {
        $this->name = $name;
        $this->author = $author;
        $this->PublishedYear = $PublishedYear;
    }
    public function info()
    {
        echo "this book belongs to {$this->author} and its published year is {$this->PublishedYear}";
    }
}

class Anime extends Manga
{
    public function message()
    {
        echo "starting off as a manga or anime but ";
    }
}

$anime = new Anime("overlord", "Kugane Maruyama", "2018");
$anime->message();
$anime->info();













class Book
{
    public $name;
    public $author;
    public function __construct($name, $author)
    {
        $this->name = $name;
        $this->author = $author;
    }
    protected function intro()
    {
        echo "The book is {$this->name} and the author is {$this->author}.";
    }
}

class Novel extends book
{
    public function message()
    {
        echo "Am I a book or a novel? ";
        $this->intro();
    }
}

$novel = new Novel("mushekou teinsei", "Rifujin na Magonote");
$novel->message(); //  message() is public and it calls intro() (which is protected) from within the inherited  class

//overriding is a basically when the child class has its own set of method and properties and they happen 
//to have the same properties/method/constructor within the parent ,so obviously per default,it'll
//pick its own constructor/method first and look for it inside child before looking for it in the parent




class staff
{
    public $name;
    public $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function intro()
    {
        echo "The fruit is {$this->name} and the age is {$this->age}.";
    }
}

class apprentice extends staff
{
    public $weight;
    public function __construct($name, $age, $weight)
    {
        $this->name = $name;
        $this->age = $age;
        $this->weight = $weight;
    }
    public function intro()
    {
        echo "The student is {$this->name}, the age is {$this->age}, and the weight is {$this->weight} kgram.";
    }
}

$student = new apprentice("Eribi", 22, 80);
$student->intro();

//final keyword to prevent either inheritance or overriding
//starting off with overriding 

class Fruit
{
    final public function intro()
    {
        echo "hello inside fruit";
    }
}

class Strawberry extends Fruit
{
    public function intro()
    {
        //cannot override intro method inside the parent error
        echo "hello inside strawberry";
    }
}
$strawbery = new Strawberry();
$strawbery->intro();


//here how to prevent inheritance using final keyword
final class Fish
{
    // gonna result in error
}

// will result in error
class Shark extends Fish {
    //will  result in error 
}
