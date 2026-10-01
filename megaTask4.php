<?php
interface Transferable{
  public function transfer(float $amount);
}
abstract class BankAccount{
  public function __construct(public string $accountNumber,protected float $balance){}
  public function getBalance(){
    return $this->balance;
  }
  public function deposit(float $amount){
   $this->balance+=$amount;
  }
  abstract public function withdraw(float $amount);
  public function getAccountSummary(){
    return "Account:{$this->accountNumber}|Balance:{$this->balance}BDT";
  }
}
class SavingsAccount extends BankAccount implements Transferable{
  private float $interestRate;
  public function __construct($accountNumber,$balance,$interestRate){
    parent::__construct($accountNumber,$balance);
    $this->interestRate=$interestRate;
  }
  public function withdraw(float $amount){
    if($this->balance>=$amount){
      $this->balance-=$amount;
      return "Withdraw {$amount} BDT from Savings";
    }else{
      return "Insufficient balance in Savings";
    }
  }
  public function transfer(float $amount){
    $this->balance-=$amount;
    return "Transferred {$amount} BDT from Savings";
  }
  public function addInterest(){
    return $this->balance+=$this->balance*($this->interestRate/100);
  }
}
class CurrentAccount extends BankAccount{
  private float $overdraftLimit;
  public function __construct($accountNumber,$balance,$overdraftLimit){
    parent::__construct($accountNumber,$balance);
    $this->overdraftLimit=$overdraftLimit;
  }
  public function withdraw(float $amount){
    if(($this->balance+$this->overdraftLimit)>=$amount){
      $this->balance-=$amount;
      return "Withdrew {$amount} BDT from Current Account.";
    }else{
      return "Overdraft limit exceeded.";
    }
  }
}
$savings=new SavingsAccount("SA-101",5000.0,5.0);
$current=new CurrentAccount("CA-202",2000.0,1000.0);
$savings->addInterest();
echo $savings->transfer(1000.0);
$accounts=[$savings,$current];
foreach($accounts as $account){
  echo $account->getAccountSummary() ."<br>";
  echo $account->withdraw(3000.0) ."<br>";
  echo "New Balance:" .$account->getBalance() ."BDT <br><br>";
}


?>