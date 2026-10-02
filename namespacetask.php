<?php
namespace App\Admin;
class User{
  public function getRole(){
    return "Admin User";
  }
}
namespace App\Customer;
class User{
  public function getRole(){
    return "Regular Customer";
  }
}
$admin=new \App\Admin\User();
echo $admin->getRole()."<br>";
$customer=new \App\Customer\User();
echo $customer->getRole();
?>