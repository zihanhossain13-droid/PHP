<?php
class BankAccount{
  private int $balance;
  public function setBalance(int $balance){
    if($balance>=0){
    $this->balance=$balance;
      echo "Balance Updated";
    }else{
      echo "Invalid Balance";
    }
  }
    public function showBalance(){
    return $this->balance;
  }
  public function deposit(int $amount){
    if($amount>=0){
    $this->balance+=$amount;
      echo "Deposit Successful";
    }else{
      echo "Invalid amount";
    }
  }
  public function withdraw(int $amount){
    if($this->balance>=$amount && $amount>=0){
      $this->balance-=$amount;
      echo "Withdraw successful";
    }else{
      echo "Insufficient Balance";
    }
  }

}
$obj=new BankAccount();
$obj->setBalance(5000);
$obj->deposit(4000);
$obj->withdraw(6000);
$output=$obj->showBalance();
echo $output;
?>