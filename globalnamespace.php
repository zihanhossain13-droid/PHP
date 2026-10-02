<?php
namespace App\Admin{
class User{
  public function getRole(){
    return "Admin User";
  }
}
}
namespace App\Customer{
class User{
  public function getRole(){
    return "Regular Customer";
  }
}
}
namespace{use App\Admin\User as AdminUser;
use App\Customer\User as CustomerUser;
$admin=new AdminUser();
echo $admin->getRole() ."<br>";
$customer=new CustomerUser();
echo $customer->getRole();
         }
          ?>