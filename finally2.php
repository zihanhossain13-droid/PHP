<?php
$age=15;
try{
if($age<18){
  throw new Exception("Not Eligible");
}
  echo "Eligible";
}catch(Exception $e){
  echo $e->getMessage();
  
}
  finally{
    echo "Process Completed";
  }
?>