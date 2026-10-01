<?php
class Book{
  public function __construct(public string $title,protected float $rentalPrice){}
  public function getRentalPrice(){
    return $this->rentalPrice;
  }
  public function calculateTotalRental(int $days){
    return $this->getRentalPrice()*$days;
  }
}
class OverdueBook extends Book{
  private float $finePerDay;
  public function __construct(
    $title,$rentalPrice,$finePerDay
  ){
    parent::__construct($title,$rentalPrice);
    $this->finePerDay=$finePerDay;
  }
  public function calculateTotalRental(int $days){
    return parent::calculateTotalRental($days)+($days*$this->finePerDay);
  }
}
class VIPMemberBook extends Book{
  private float $discountPercentage;
  public function __construct($title,$rentalPrice,$discountPercentage){
    parent::__construct($title,$rentalPrice);
    $this->discountPercentage=$discountPercentage;
  }
  public function calculateTotalRental(int $days){
    $totalRental=parent::calculateTotalRental($days);
    $discount=$totalRental*($this->discountPercentage/100);
    return $totalRental-$discount;
  }
}
$borrowedBooks=[
  new Book("PHP OOP Basics",50.0),
  new OverdueBook("Clean Code",50.0,20.0),
  new VIPMemberBook("Design Patterns",100.0,15.0)
];
$days=5;
foreach($borrowedBooks as $book){
  echo "Book:{$book->title}|Total Rental({$days}days)". $book->calculateTotalRental($days). "BDT";
}
?>
