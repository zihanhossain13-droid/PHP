<?php
class Car{
    public string $brand;
    public string $model;
    public int $speed;
    public function __construct($brand,$model,$speed){
$this->brand=$brand;
$this->model=$model;
$this->speed=$speed;
    }
    public function getDetails(){
       return "{$this->brand} {$this->model} - Top Speed: {$this->speed} km/h";
    }
}
$car1=new Car(brand:"Toyota",model:"Corolla",speed:180);
$car2=new Car(brand:"BMW",model:"M5",speed:250);
echo $car1->getDetails();
echo $car2->getDetails();

?>