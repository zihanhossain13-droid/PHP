<?php
class BankAccount{
  public function __construct(public string $accountHolder,protected string $accountNumber,private float $balance){}
  public function getBalance(){
    return $this->balance;
  }
  public function deposit(float $amount){
    $this->balance+=$amount;
    echo "Deposited:{$amount} BDT";
  }
  
  public function withdraw(float $amount){
    if($this->balance>=$amount){
      $this->balance-=$amount;
      echo "Withdrawn: {$amount} BDT";
    }else{
      echo "Insufficient balance!";
    }
  }
}
class  SavingsAccount extends BankAccount{
  private float $interestRate;
  public function __construct($accountHolder,$accountNumber,$balance,$interestRate){
    parent::__construct($accountHolder,$accountNumber,$balance);
    $this->interestRate=$interestRate;
  }
  public function addInterest(){
    $interest=$this->getBalance()*($this->interestRate/100);
    $this->deposit($interest);
  }
}
$myAccount=new SavingsAccount("Zihan","SB-1001",10000.0,5.0);
$myAccount->deposit(5000);
$myAccount->withdraw(2000);
$myAccount->addInterest();
echo "Final Balance:" .$myAccount->getBalance()."BDT";
?>