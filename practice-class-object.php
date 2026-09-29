<?php
class Student{
public String $name;
  public Int $roll;
  public function introduce(){
    echo "Hi, I am {$this->name} and my roll is {$this->roll}";
  }
}
$student=new Student();
$student->name="Zihan Hossain";
$student->roll=12345678;
$student->introduce();
?>