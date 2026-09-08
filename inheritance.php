<?php
class User{
  protected string $name;
  public function setName(string $name){
    $this->name=$name;
  }
}
class Child extends User{
  public function showName(){
    return $this->name;
  }
}
$obj=new Child();
$obj->setName("Zihan");
echo $obj->showName();

?>