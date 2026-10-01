<?php
class Product{
  public function __construct(
    public string $name,
    protected float $price
  ){}
  public function getPrice(){
    return $this->price;
  }
  public function calculateFinalPrice(){
    return $this->price;
  }
}
class DiscountedProduct extends Product{
  private float $discountPercentage;
  public function __construct($name,$price,$discountPercentage){
    parent::__construct($name,$price);
    $this->discountPercentage=$discountPercentage;
  }
  public function calculateFinalPrice(){
    $discount=$this->getPrice()*($this->discountPercentage/100);
    return $this->getPrice()-$discount;
  }
}
class VIPProduct extends Product{
  private float $flatDiscount;
  public function __construct($name,$price,$flatDiscount){
    parent::__construct($name,$price);
    $this->flatDiscount=$flatDiscount;
  }
  public function calculateFinalPrice(){
    return $this->getPrice() - $this->flatDiscount;
  
  }
}
$cart=[new Product("Keyboard",1500.0),new DiscountedProduct("Mouse",2000.0,10.0),
  new VIPProduct("Monitor",15000.0,500.0)];
foreach($cart as $item){
  echo "Item:{$item->name}|Final Price:".$item->calculateFinalPrice()."BDT <br>";
}



?>