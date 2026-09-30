<?php
class Person{
  public function __construct
   (
     protected string $name,
     protected int $age
   )
  {
    
  }

  public function getDetails(){
    return "Name:{$this->name},Age:{$this->age}";
  }
}
  class Student extends Person{
    public int $studentId;
    public function __construct(string $name,int $age,int $studentId){
  parent::__construct($name,$age
  
  );
    $this->studentId=$studentId;
  }
    
  public function getStudentInfo(){
    echo "Student ID:{$this->studentId},Name:{$this->name}";
  }
  
  }
  
$student=new Student("Zihan",22,1001);
$student->getDetails();
$student->getStudentInfo();
?>