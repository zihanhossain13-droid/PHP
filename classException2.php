<?php
class AgeException extends Exception{
  
}
function checkAge($age){
  if($age<18){
    throw new AgeException("You are not Eligible");
  }
  return "Eligible";
}
try{
  echo checkAge(15);
}catch(AgeException $e){
  echo $e->getMessage();
}
?>