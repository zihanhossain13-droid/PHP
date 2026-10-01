<?php
class Vehicle{
  public function __construct(protected string $brand){}
  public function getBrand(){
    return "Brand:{$this->brand}";
  }
  
}
class Car Extends Vehicle{
  protected int $doors;
  public function __construct($brand,$doors){
    parent::__construct($brand);
    $this->doors=$doors;
  }
  public function getCartDetails(){
    return "Brand:{$this->brand},Doors:{$this->doors}";
  }
}
class SportsCar Extends Car{
  public float $topSpeed;
  public function __construct($brand,$doors,$topSpeed){
    parent::__construct($brand,$doors);
    $this->topSpeed=$topSpeed;
  }
  public function getSportsCarInfo(){
    return "Brand:{$this->brand},Doors:{$this->doors},Top Speed:{$this->topSpeed} km/h";
  }
}
$ferrari=new SportsCar("Ferrari",2,350.0);
echo $ferrari->getSportsCarInfo();
?>