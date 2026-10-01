<?php
class Payment{
  public function __construct(protected float $amount){}
  public function processPayment(){
    return "Processing payment of {$this->amount} BDT";
  }
}
class BkashPayment extends Payment{
  public function __construct($amount){
    parent::__construct($amount);
  }
  public function processPayment(){
    return "Paid {$this->amount} BDT via bKash.";
  }
}
class CardPayment extends Payment{
  public function __construct($amount){
    parent::__construct($amount);
  }
  public function processPayment(){
    return "Paid {$this->amount} BDT via Credit Card";
  }
}
$payments=[new BkashPayment(1200.0),new CardPayment(5000.0)];
foreach($payments as $payment){
  echo $payment->processPayment()."<br>";
}
?>