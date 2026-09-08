<?php
$email="zihan@gmail.com";
$result=filter_var($email,FILTER_VALIDATE_EMAIL);
if($result){
  echo "Valid email";
}else{
  echo "Invalid email";
}
?>