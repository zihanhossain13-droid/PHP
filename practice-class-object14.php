<?php
class SmartPhone{
    public function __construct(
    
      private string $model,
      private int $batteryLevel=100 
    ){}
    public function getModel():string{
        return $this->model;
    }
    public function getBatteryLevel():int{
        return $this->batteryLevel;
    }
    public function charge(int $amount):void{
        if($this->batteryLevel+$amount>100){
            $this->batteryLevel=100;

        }else{
            $this->batteryLevel+=$amount;
        }
    }
}
    $phone= new SmartPhone("Samsung S24");
    echo $phone->getBatteryLevel();
    $phone->charge(20);

?>