<?php
class Student{
    public string $name;
    public float $marks;
    public function getGrade(){
        if($this->marks>=80){
            return "A+";
        }
        else if($this->marks>=60){
return "A";
        }
        else{
            return "F";
        }
    }
    public function showResult(){
        echo "Student: {$this->name}, Marks:{$this->marks}, Grade:". $this->getGrade();
    }
}
$student=new Student();
$student->name="Zihan";
$student->marks=85;
$student->showResult();
?>