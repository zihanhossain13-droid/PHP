<?php
trait A{
  public function show(){
    return "Hello from Trait";
  }
}
class B{
  use A;
  public function show(){
    return "Hello from class B";
  }
}
$use=new B();
echo $use->show();
?>