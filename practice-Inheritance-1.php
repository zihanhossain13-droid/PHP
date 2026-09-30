<?php
class Employee{
  public function __construct(
    protected string $name,
    protected float $salary
  )
   {
     
   }
  public function getDetials(){
    return "Employee:{$this->name},Salary:{$this->salary} BDT";
  }
}
class Manager extends Employee{
  public float $bonus;
  public function __construct($name,$salary,$bonus){
    parent::__construct($name,$salary);
    $this->bonus=$bonus;
  }
  public function getTotalSalary(){
    return $this->salary+$this->bonus;
  }
}

$manager=new Manager("Zihan",60000,15000);
echo $manager->getDetials();
echo $manager->getTotalSalary();

?>