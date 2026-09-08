<?php
class User{
  public function greet(){
    return "Hello";
  }
}
class Child extends User{
  public function greet(){
    return parent::greet()."-Zihan Hosain";
  }
}
$obj=new Child();
$output=$obj->greet();
echo $output;
?>