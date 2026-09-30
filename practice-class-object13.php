<?php
class ProductItem{
    public function __construct(
public string $name,
public float $price,
public int $quantity=1
    ){}

public function getTotalPrice(){
    return $this->price*$this->quantity;
}
public function getDetails(){
    echo "Item:{$this->name},Total:" . $this->getTotalPrice()."BDT";
}
}

$item1=new ProductItem("Mouse",500);
$item2=new ProductItem("Keyboard",1200,3);
echo $item1->getDetails();
echo $item2->getDetails();
?>