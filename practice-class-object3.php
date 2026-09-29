<?php
class BankAccount{
  public string $accountHolder;
  public float $balance;
  public function deposit($amount){
    $this->balance+=$amount;
  }
  public function showBalance(){
    echo "Account Holder:{$this->accountHolder},Current Balance:{$this->balance}";
  }
}
$account1=new BankAccount();
$account1->accountHolder="Zihan";
$account1->balance=1000;
$account1->deposit(500);
$account1->showBalance();
$account2=new BankAccount();
$account2->accountHolder="Rahim";
$account2->balance=500;
$account2->showBalance();
?>