<?php
class Student{
  public static int $count=0;
  public function __construct(){
  Student::$count++;
  }
}
$student1=new Student();
$student2=new Student();
$student3=new Student();
echo Student::$count;
?>