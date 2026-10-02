<?php
abstract class PaymentGateway{
  abstract public function pay(float $amount);
  public function receipt(){
    return "Receipt generated.";
  }
}
class Nagad extends PaymentGateway{
  public function pay(float $amount){
    return "Paid {$amount} BDT via Nagad.";
  }
}
$nagad=new Nagad();
echo $nagad->pay(200);
echo $nagad->receipt();
?>