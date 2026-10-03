<?php
namespace App\Payment{
class User{
  public function getRole(){
    return "Payment User.";
  }
}
}
namespace App\Database{
class User{
  public function getType(){
    return "Database User";
  }
}
}
namespace{
use App\Payment\User as Pay;
use App\Database\User as Db;
$pUser=new Pay();
$Db=new Db();
echo $pUser->getRole();
echo $Db->getType();
}
  ?>