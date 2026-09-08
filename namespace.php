<?php
namespace App;
class User{
  public static function hello(){
    return "App User";
  }
}
namespace Admin;
class User{
  public static function hello(){
    return "Admin User";
  }
}
$output2=\App\User::hello();
$output3=\Admin\User::hello();
echo $output2;
echo $output3;

?>