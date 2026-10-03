<?php
$tax=0.15;
$calculateTaxOld=function ($amount) use ($tax){
  return $amount*$tax;
};
$calculateTaxNew=fn(float|int $amount)=>$amount*$tax;
echo $calculateTaxNew(1000);