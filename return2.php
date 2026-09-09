<?php
function checkAge($age){
  if($age<18){
    return "Not Eligible";
  }
  return "Eligible";
}
echo checkAge(15);
?>