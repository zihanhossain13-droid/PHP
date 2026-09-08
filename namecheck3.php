<?php
function isvalid(string $name):bool{
  return preg_match("/^[a-zA-Z]+$/",$name)==1;
  
}
$var=isvalid("Zihan");
echo $var;
  ?>