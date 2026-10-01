<?php
interface GPSDrawable{
  public function getCoordinates();
}
interface Payable{
  public function processPayment();
}
class ElectricScooter implements GPSDrawable,Payable{
  public function __construct(public string $model,public float $fare){
    
  }
  public function getCoordinates(){
    return "Scooter {$this->model} Location:23.8103 N,90.4125 E";
  }
  public function processPayment(){
    return "Charged {$this->fare} BDT for Scooter ride.";
  }
}
$scooter=new ElectricScooter("A1",150.0);
echo $scooter->getCoordinates();
echo $scooter->processPayment();
?>