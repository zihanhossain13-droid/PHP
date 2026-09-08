<?php
function validColor(string $color):bool{
  return preg_match("/^(red|blue)$/",$color);
}
$var =validColor("red");
echo $var;
?>