<?php

namespace HT;
//They allow for better organization by grouping classes that work together to perform a task
//They allow the same name to be used for more than one classnamespace Html;

//declaredfirst!
//Constants, classes and functions declared in this file will belong to the Html namespace:
class RandomTable
{
    public $title = "";
    public $numRows = 0;
    public function info()
    {
        echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
}
$table = new RandomTable();
$table->title = "My table";
$table->numRows = 5;
$table->info();
//Constants, classes and functions declared in this file will belong to the Html namespace:

//nested namespacing :

// namespace Code\Html;

//To access classes from outside a namespace, the class needs to have the namespace attached to it.
