<?php
function findbig($a,$b){
  if($a>$b){
    return $a;
  }else{
    return $b;
  }
}
  $result=findbig(5,10);
    echo $result;
?>