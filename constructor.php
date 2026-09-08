<?php
class User{
  public string $name;
  public string $email;

public function __construct(string $name,string $email){
  $this->name=$name;
  $this->email=$email;
  
}
}
$obj=new User("Zihan","zihanhossain13@gmail.com");
echo $obj->name;
echo $obj->email;
?>