<?php
declare(strict_types=1);
class OrderCalculator{
  public function calculateTotal(int|float $subtotal,int|float $shippingFee,float $taxRate){
    $calculate=fn()=>$subtotal+$shippingFee+($subtotal*($taxRate/100));
    return $calculate();
  }
}
try{
  $calculator=new OrderCalculator();
  $total=$calculator->calculateTotal(2000,120.50,5.0);
  echo "Total Amount:" . $total ."BDT";
}catch(TypeError $e){
  echo "Type Error:" . $e->getMessage();
}
?>