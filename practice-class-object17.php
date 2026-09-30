<?php
class CartItem{
  public function __construct(
    public string $itemName,
      private float $price,
      private int $quantity=1
    ){
  }
  public function getPrice(){
    return $this->price;
  }
  public function getQuantity(){
    return $this->quantity;
  }
  public function setQuantity(int $qty){
    if($qty<=0){
      echo "Quantity must be at least 1!";
    }else{
      $this->quantity=$qty;
    }
  }
  public function getTotalPrice(){
    return $this->price*$this->quantity;
  }
}
$cart=new CartItem("Headphone",1500.0,2);
$cart->setQuantity(0);
$cart->setQuantity(3);
echo $cart->getTotalPrice();
?>