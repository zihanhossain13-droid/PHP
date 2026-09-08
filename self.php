<?php
class counter{
  public static int $count=0;
  public function __construct(){
    self::$count++;
  }
}
$student1=new counter();
$student2=new counter();
$student3=new counter();
echo counter::$count;
?>