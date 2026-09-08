<?php
function isvalidEmail(string $email):bool{
  return filter_var($email,FILTER_VALIDATE_EMAIL)!==false;
}
$var=isvalidEmail("zihan@gmail.com");
echo $var;
?>