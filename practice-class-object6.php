<?php
class Product{
  public string $title;
  public float $price;
  public int $stock;
  public function sell($quantity){
    if($quantity>$this->stock){
      echo "No enough stock";
    }
    else{
      $this->stock-=$quantity;
      $total=$quantity*$this->price;
      echo "Sold! Total price: {$total} BDT";
    }
  }
  public function restock($quantity){
    $this->stock+=$quantity;
   echo "Restocked! New stock:".$this->stock;
  }
   
  public function showDetails(){
    return "Product: {$this->title}, Price: {$this->price}, Stock: {$this->stock}";
  }
}
$product=new Product();
$product->title="Laptop";
$product->price=50000;
$product->stock=5;
$product->sell(3);
$product->sell(7);
$product->restock(10);
echo $product->showDetails();

?>