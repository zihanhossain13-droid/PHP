<?php
class Employee{
    public function __construct(
        private string $name,
        private float $salary
    )
    {
        
    }
    public function getName():string{
        return $this->name;
    }
    public function getSalary():float{
        return $this->salary;
    }
    public function setSalary(float $newSalary){
if($this->salary>$newSalary){
    echo  "Salary cannot be reduced!<br>";
}else{
    $this->salary=$newSalary;
}
    }
}
$emp=new Employee("Rahim",50000);
$emp->setSalary(45000);
$emp->setSalary(55000);

?>