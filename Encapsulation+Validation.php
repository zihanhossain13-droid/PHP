<?php
class BankAccount{
  private float $balance;
  public function __construct(float $initialBalance){
    if($initialBalance<0){
      $this->balance=0;
    }else{
      $this->balance=$initialBalance;
    }
  }
  public function getBalance(){
    return $this->balance;
  }
}
$bankaccount=new BankAccount(-100);
echo $bankaccount->getBalance();
?>