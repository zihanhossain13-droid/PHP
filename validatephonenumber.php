<?php
function isvalidPhoneNumber(string $number):bool{
  return preg_match("/^01[3-9][0-9]{8}$/",$number)==1;
}
$val=isvalidPhoneNumber("01927699316");
echo $val;
  ?>