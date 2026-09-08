<?php
abstract class Shape{
  abstract public function area();
}
class Circle extends Shape{
  public function area(){
    return "Circle Area";
  }
}
$obj=new Circle();
$output=$obj->area();
echo $output;
?>