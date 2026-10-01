<?php
abstract class Vehicle{
  public function __construct(
    public string $brand,
    protected float $baseFare
  ){}
  abstract public function calculateFare();
public function getDetails(){
  return "Brand:{$this->brand}";
}
}
Class Car extends Vehicle{
  private float $passengerCapacity;
  public function __construct($brand,$baseFare,$passengerCapacity){
    parent::__construct($brand,$baseFare);
    $this->passengerCapacity=$passengerCapacity;
  }
  public function calculateFare(){
    return $this->baseFare+($this->passengerCapacity*50);
  }
}
class Bike extends Vehicle{
  public function __construct($brand,$baseFare){
    parent::__construct($brand,$baseFare);
  }
  public function calculateFare(){
    return $this->baseFare*0.8;
  }
}
$vehicles=[
  new Car("Toyota",500.0,4),
  new Bike("Yamaha",300.0)
];
foreach($vehicles as $vehicle){
  echo $vehicle->getDetails()."|Fare:" . $vehicle->calculateFare() ."BDT";
}
?>