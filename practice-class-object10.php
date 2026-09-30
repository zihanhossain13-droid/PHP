<?php
class Book{
    public string $title;
    public float $price;
    public function __construct($title,$price){
        $this->title=$title;
        $this->price=$price;
    }
    public function displayBook(){
        echo "Book Name: {$this->title}, Price: {$this->price} BDT";
    }
}
$myBook=new Book("OOP with PHP",350.50);
$myBook->displayBook();

?>