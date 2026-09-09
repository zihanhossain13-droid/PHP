<?php
class InsufficientBalanceException extends Exception{
  
}
try{
  $balance=500;
  $withdraw=1000;
  if($withdraw>$balance){
    throw new InsufficientBalanceException("Insufficient Balance");
  }
  echo "Withdraw successful";
}catch(InsufficientBalanceException $e){
  echo $e->getMessage();
}
?>