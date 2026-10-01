<?php
class Product{
  public function __construct(public string $name,private float $price,protected int $stock){}
  public function getPrice(){
    return $this->price;
  }
  public function getProductInfo(){
  return "Product:{$this->name},Price:{$this->price} BDT,Stock:{$this->stock}pcs";
  }
}
class DiscountedProduct extends Product{
  private float $discountPercentage;
  public function __construct($name,$price,$stock,$discountPercentage){
    parent::__construct($name,$price,$stock);
    $this->discountPercentage=$discountPercentage;
  }
  public function getFinalPrice(){
    return $this->getPrice()-($this->getPrice()*($this->discountPercentage/100));
  }
  public function sellProduct(int $qty){
    if($this->stock>=$qty){
      $this->stock-=$qty;
      echo "Sale successful! Remaining stock:{$this->stock}";
    }else{
      echo "Out of stock";
    }
  }
}
$laptop=new DiscountedProduct("Laptop",50000.0,10,10.0);
echo $laptop->getFinalPrice();
$laptop->sellProduct(3);
echo $laptop->getProductInfo();


?>