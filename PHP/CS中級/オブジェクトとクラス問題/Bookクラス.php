<?php

class Book {
    public $author;
    public $title;
    public $year;

    function __construct(string $title, string $year) {
        $this->author = "Stephen Hawkings";
        $this->title = $title;
        $this->year = $year;
    }
}

function printBookArray($books): void{
    for ($i = 0; $i < count($books); $i++) {
        echo $books[$i]->title . " written by Stephen Hawkings in " . $books[$i]->year . PHP_EOL;
    }
}

$books = [];

array_push($books, new Book("How Did It All Begin?", "2021"));
array_push($books, new Book("The Theory of Everything", "2010"));
array_push($books, new Book("God Created the Integers", "2006"));

printBookArray($books);