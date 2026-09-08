<?php
function validColor(string $color):bool{
  return preg_match("/^(red|blue)$/",$color)==1;
}
$var =validColor("red");
echo $var;
?>