<?php
class Vehicle{
  public function start(){
    return "Vehicle is starting";
  }
}
class Car extends Vehicle{
  public function start(){
    return "Car is starting with key ignition.";
  }
}
$car=new car();
echo $car->start();
?>