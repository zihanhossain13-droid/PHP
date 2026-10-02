<?php
interface PaymentMethodInterface{
  public function pay(float $amount);
}
class Bkash implements PaymentMethodInterface{
  public function pay(float $amount){
    return "Paid {$amount} BDT via bKash.";
  }
}
class PaymentProcessor{
  public function process(PaymentMethodInterface $method,float $amount){
    return $method->pay($amount);
  }
}
$bkash=new Bkash();
$payment=new PaymentProcessor();
echo $payment->process($bkash,500);
?>