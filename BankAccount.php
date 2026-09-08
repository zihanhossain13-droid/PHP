<?php
class BankAccount{
  private int $balance;
  public function setBalance(int $balance){
    $this->balance=$balance;
  }
  public function showBalance(){
    return $this->balance;
  }
}
$obj=new BankAccount();
$obj->setBalance(5000);
$output=$obj->showBalance();
echo $output;
?>