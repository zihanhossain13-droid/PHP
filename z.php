<?php
class Counter{
  public static int $count=0;
  public static function increase()
  {
  self::$count++;  
    }
}
Counter::increase();
Counter::increase();
Counter::increase();
echo Counter::$count;
?>