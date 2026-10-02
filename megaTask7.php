<?php
trait EmailNotifier{
  public function sendEmail(string $to,string $message){
    return "Sending Email to {$to}:{$message}";
  }
}
class User{
  use EmailNotifier;
  public function __construct(public string $name,public string $email){
    
  }
  public function register(){
   echo $this->sendEmail($this->email,"Welcome {$this->name}!");
  }
}
class Invoice{
  use EmailNotifier;
  public function __construct(public string $invoiceId,public string $customerEmail,public float $amount){}
  public function processPayment(){
    echo $this->sendEmail($this->customerEmail,"Invoice #{$this->invoiceId} paid.Amount:{$this->amount} BDT");
  }
}
$user=new User("Zihan","zihan13@example.com");
$user->register();
echo "<br>";
$invoice=new Invoice("INV-9901","customer@example.com",2500.0);
$invoice->processPayment();



?>