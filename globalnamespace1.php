<?php
interface PaymentMethod{
public function pay(float $amount);
}
class BkashPayment implements PaymentMethod{
public function pay(float $amount){
return "Paid {$amount} BDT via bkash.";
}
}
class NagadPayment implements PaymentMethod{
  public function pay(float $amount){
    return "Paid {$amount} BDT via Nagad";
  }
}
class OrderProcessor{
  public function __construct(public PaymentMethod $payment){}
  public function process(float $amount){
    echo $this->payment->pay($amount);
  }
}
$bkash=new BkashPayment();
$order1=new OrderProcessor($bkash);
$order1->process(1000);
$nagad=new NagadPayment();
$order2=new OrderProcessor($nagad);
$order2->process(2000);
?>