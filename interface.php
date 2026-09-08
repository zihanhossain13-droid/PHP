<?php
interface Animal{
  public function sound();
}
class Dog implements Animal{
  public function sound(){
    return "Dog Barks";
  }
}
$obj=new Dog();
$output=$obj->sound();
echo $output;
?>