<?php
class User{
  public function greet(){
    return "Hello";
    
  }
}
class Child extends User{
  public function greet(){
    return "I am Zihan";
  }
}
$obj=new Child();
$output=$obj->greet();
echo $output;
?>