<?php
trait TraitOne{
  public function greet(){
    return "Hello One";
  }
}
trait TraitTwo{
  public function greet(){
    return "Hello Two";
  }
}
class MyClass{
  use TraitOne,TraitTwo{
    TraitOne::greet insteadof TraitTwo;
  }
}
$myclass=new MyClass();
echo $myclass->greet();
?>