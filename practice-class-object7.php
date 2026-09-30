<?php
class SmartLight{
    public string $brand;
    public bool $isOn;
    public int $brightness;
    public function turnOn(){
        $this->isOn=true;
        echo "{$this->brand} is turned ON!";
    }
    public function turnOff(){
        $this->isOn=false;
        echo "{$this->brand} light is turned OFF!";
    }
    public function setBrightness($level){
        if($this->isOn==true){
            $this->brightness=$level;
            echo "Brightness set to {$level}%";
        }
        else{
        echo "Cannot set brightness, light is OFF!";

        }
    }
}
$smartlight=new SmartLight();
$smartlight->brand="Philips";
$smartlight->isOn=false;
$smartlight->brightness=50;
$smartlight->setBrightness(80);
$smartlight->turnOn();
$smartlight->setBrightness(80);
?>