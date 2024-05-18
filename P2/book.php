<?php
include_once "./member.php";
class Book {
    public function __construct(private $title, private $availableCopies) {
    }
    public function getTitle(){
        return $this->title;
    }
    public function getAvailableCopies(){
        return $this->availableCopies;
    }
    public function borrowBook($book){
        $this->availableCopies= $this->getAvailableCopies()-$book;
        return $book;
    }

    public function returnBook($book){
        $this->availableCopies= $this->getAvailableCopies()+$book;
        return $book;
    }
}

$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);
echo "Name".$book1->getTitle().", "."Available Copies: ".$book1->getAvailableCopies()."\n";
echo "Name".$book2->getTitle().", "."Available Copies: ".$book2->getAvailableCopies()."\n";
$member1 = new Member("John Deo");
$member2 = new Member("Jane Smith");
$member1->getName();
$member2->getName();
echo $member1->borrowBook(1)."\n";
echo $member2->borrowBook(1)."\n";
$ab1= $book1->getAvailableCopies() - $member1->borrowBook(1) ;
$ab2= $book2->getAvailableCopies() - $member2->borrowBook(1) ;
echo "Available Copies of'{$book1->getTitle()}': ".$ab1."\n";
echo "Available Copies of'{$book2->getTitle()}': ".$ab2."\n";
