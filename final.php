<?php
class Animal{
  final public function sound(){
    return "Animal Sound";
  }
  
}
class Dog extends Animal{
  public function sound(){
    return "Dog Barks";
  }
}
$obj=new Dog();
$output=$obj->sound();
echo $output;
?>