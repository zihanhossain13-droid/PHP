<?phpinterface Trackable{
  public function getTrackingStatus();}abstract class Order{
  public function __construct(public string $orderId,protected float $productPrice){}
  public function getProductPrice(){
    return $this->productPrice;
  }
  abstract public function calculateTotal();
  public function getOrderSummary(){
    return "Order ID:{$this->orderId} | Price:{$this->productPrice} BDT";
  }}class StandardOrder extends Order implements Trackable{
  private float $shippingCost;
  public function __construct($orderId,$productPrice,$shippingCost){
    parent::__construct($orderId,$productPrice);
    $this->shippingCost=$shippingCost;
  }
  public function calculateTotal(){
    return $this->productPrice + $this->shippingCost;
  }
  public function getTrackingStatus(){
    return "Standard Order {$this->orderId}: Shipped via Regular Courier.";
  }}class ExpressOrder extends Order implements Trackable{
  private float $expressFee;
  public function __construct($orderId,$productPrice,$expressFee){
    parent::__construct($orderId,$productPrice);
    $this->expressFee=$expressFee;
  }
  public function calculateTotal(){
    return $this->productPrice+$this->expressFee;
  }
  public function getTrackingStatus(){
    return "Express Order {$this->orderId}:In Transit (same Day Delivery)";
  }}$orders=[
  new StandardOrder("ORD-101",500.0,60.0),
  new ExpressOrder("ORD-102",1200.0,150.0)];foreach($orders as $order){
  echo $order->getOrderSummary() . "<br>";
  echo "Total Cost:" . $order->calculateTotal() . "BDT <br>";
  echo $order->getTrackingStatus() ."<br><br>";}?>