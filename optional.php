<?php
function isvalid(string $name):bool{
  return preg_match("/^zih?n$/",$name)==1;
}
$var=isvalid("zihan");
  echo $var;
?>