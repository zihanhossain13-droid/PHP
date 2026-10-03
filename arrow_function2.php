<?php
declare(strict_types=1);
class DiscountCalculator{
  public function applyDiscount(int|float $price,float $discountPercentage){
    $calculateFinalPrice=fn()=>$price-($price*($discountPercentage/100));
    return $calculateFinalPrice();
  }
}
try{
  $calculator=new DiscountCalculator();
  echo "Final Price:".$calculator->applyDiscount(1000,10.0). "BDT<br>";
  echo "Final Price:".$calculator->applyDiscount(1500.50,15.0) . "BDT<br>";
}catch(TypeError $e){
  echo "Type Error:". $e->getMessage();
}