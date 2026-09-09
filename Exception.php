<?php
try{
  $age=15;
  if($age<18){
    throw new Exception("You are not eligible");
  }
  echo "You are eligible";
}
  catch(Exception $e){
    echo $e->getMessage();
  
  }
?>