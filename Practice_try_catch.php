<?php
class Calculator{
  public function divide(float $a,float $b){
    if($b==0){
      throw new Exception("Division by zero is not allowed!");
    }
    return $a/$b;
  }
}
try{
  $calculator=new Calculator();
  $calculator->divide(4,0);
}catch(Exception $e){
  echo "Error" .$e->getMessage();
  
}finally{
  echo " Calculator finished.";
}