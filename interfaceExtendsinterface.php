<?php
interface Payment{
  public function pay();
}
interface Notification extends Payment{
  public function send();
}
class Bkash implements Notification{
  public function pay(){
    return "Payment Successfully";
    
  }
  public function send(){
    return "Notification send";
  }
  
}
$obj=new Bkash();
$output=$obj->pay();
echo $output;
$output2=$obj->send();
echo $output2;

?>