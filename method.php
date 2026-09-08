<?php
class User{
  public string $name;
  public function __construct(string $name){
  $this->name=$name;
  }
    public function sayHello(){
      return "Hello".$this->name;
    }
}
$obj=new User("Zihan");
echo $obj->sayHello();
?>