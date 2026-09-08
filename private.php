<?php
class User{
  private string $name;
  public function setName(string $name){
    $this->name=$name;
  }
  public function showName(){
    return $this->name;
  }
}
$obj=new User();
$obj->setName("Zihan");
$output=$obj->showName();
echo $output;
?>