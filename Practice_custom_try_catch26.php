<?php
class InsufficientBalanceException extends Exception{}
class Wallet{
  public function __construct(private float $balance){}
  public function pay(float $amount){
    if($amount>$this->balance){
      throw new InsufficientBalanceException("Not enough balance in wallet!");
    }else{
      $this->balance-=$amount;
    }
  }
}
try{
  $wallet=new Wallet(50);
  $wallet->pay(100);
}catch(InsufficientBalanceException $e){
  echo "Custom Error:".$e->getMessage();
  
}catch(InsufficientBalanceException $e){
  echo "General Error" .$e->getMessage();
}