<?php
$emails="zihan@gmail.com";
function isvalid(string $email):bool{
  if(str_contains($email,"@")){
    return true;
  }else{
    return false;
  }
}
$result=isvalid($emails);
echo $result;
?>