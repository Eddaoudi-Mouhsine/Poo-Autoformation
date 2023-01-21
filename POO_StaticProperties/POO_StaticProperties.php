<?php

class Book
{
    public static $name = "harry potter";
    public function get_BookName()
    {
        return self::$name;
    }
}

$book = new Book();
echo $book->get_BookName();
