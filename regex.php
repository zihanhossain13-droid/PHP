<?php
function isvalid(int $name):bool{
  return preg_match("/^[0-2]$/",$name)==1;
}
$var=isvalid(2);
echo $var;
?>