<?php
class Member extends Book {
    public function __construct(private $name){
        $this->name = $name;
    }
    public function getName() {
        echo "Name: ".$this->name."\n";     
    }
    public function borrowBook($book) {
        return $book;
    }
    public function returnBook($book) {
        return $book;
    }
}