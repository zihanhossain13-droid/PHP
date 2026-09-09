<?php
try{
  $balance=500;
  if($balance<1000){
    throw new Exception("Insufficient Balance");
  }
  echo "Payment Successful";
}catch(Exception $e){
  echo $e->getMessage();
}
  finally{
    echo "Transaction Successful";
  }
?>