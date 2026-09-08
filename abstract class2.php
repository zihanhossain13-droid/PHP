<?php
abstract class Animal{
  abstract public function sound();
  public function eat(){
    return "Animal is Eating";
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
$output2=$obj->eat();
echo $output2;
?>