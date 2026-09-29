<?php
class Book{
  public string $title;
  public float $price;
  public function displayBook(){
    echo "Book Name:{$this->title},Price:{$this->price}";
  }
}
$mybook=new Book();
$mybook->title="Zihan";
$mybook->price=34.67;
$mybook->displayBook();
?>