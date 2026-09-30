<?php
class Vehicle{
  public function __construct(protected string $brand,
                             protected float $speed){}
  public function getVehicleInfo(){
    return "Brand:{$this->brand},Speed:{$this->speed} km/h";
  }
  
}
class ElectricCar extends Vehicle{
  public int $batteryCapacity;
  public function __construct($brand,$speed,$batteryCapacity){
    parent::__construct($brand,$speed);
    $this->batteryCapacity=$batteryCapacity;
  }
  public function getBatteryInfo(){
    return "Battery Capacity: {$this->batteryCapacity} kWh";
  }
}
$tesla=new ElectricCar("Tesla Model 3",200.0,75);
echo $tesla->getVehicleInfo();
echo $tesla->getBatteryInfo();
?>