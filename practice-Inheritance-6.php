<?php
class Ride{
  public function __construct(public string $passengerName,
                             protected float $distance,private float $ratePerKm){}
  public function getRatePerKm(){
    return $this->ratePerKm;
  }
  public function calculateFare(){
return $this->distance*$this->getRatePerKm();
  }
}
class PremiumRide extends Ride{
  private float $luxuryFee;
  public function __construct($passengerName,$distance,$ratePerKm,$luxuryFee){
    parent::__construct($passengerName,$distance,$ratePerKm);
    $this->luxuryFee=$luxuryFee;
  }
  public function getFinalFare(){
    return $this->calculateFare()+$this->luxuryFee;
  }

public function getRideDetails(){
  return  "Passenger:{$this->passengerName},Distance:{$this->distance} km";
}
}
$ride=new PremiumRide("Zihan",15.0,30.0,100.0);
echo "Total Fare:".$ride->getFinalFare()."BDT";
echo $ride->getRideDetails();
?>