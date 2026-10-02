<?php
class MathUtility{
  public static float $pi=3.1416;
  public static function square(float $number){
    return $number*$number;
  }
}
MathUtility::$pi;
echo MathUtility::square(5);

?>