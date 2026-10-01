<?php
class Employee{
  public function __construct(
    protected string $name,protected float $salary
  ){}
  public function getDetails(){
    return "Employee:{$this->name},Base Salary:{$this->salary} BDT";
  }
}
class Manager extends Employee{
  private float $bonus;
  public function __construct($name,$salary,$bonus){
    parent::__construct($name,$salary);
    $this->bonus=$bonus;
  }
  public function getDetails(){
    return "Manager:{$this->name},Base Salary:{$this->salary} BDT,Bonus{$this->bonus} BDT";
  }
}
$manager=new Manager("Zihan",60000.0,15000.0);
echo $manager->getDetails();
?>