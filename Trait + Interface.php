<?php
interface ShapeInterface{
  public function getArea();
}
class Square implements ShapeInterface{
  public function __construct(public float $length){}
  public function getArea(){
    return $this->length*$this->length;
  }
}
class AreaCalculator{
  public function calculate(ShapeInterface $shape){
    return $shape->getArea();
  }
}
$square=new Square(4);
$area=new AreaCalculator();
echo $area->calculate($square);
?>