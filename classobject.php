<?php
class Student{
  public string $name;
  public Int $age;
}
$obj=new Student();
$obj->name="Zihan";
$obj->age=23;
echo $obj->name;
echo $obj->age;
?>