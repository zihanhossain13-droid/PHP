<?php
namespace App\Payment;
class User{
  public function getRole(){
    return "Payment User.";
  }
}
$user=new User();
echo $user->getRole();
?>