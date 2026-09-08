<?php
trait Logger{
  public static function Loggin(){
    return "User logged in";
  }
  
}
trait Logout{
  public static function logout(){
    return "User logged out";
  }
}
class User{
  use Logger,Logout;
}
$output=User::Loggin();
echo $output;
$output2=User::logout();
echo $output2;
?>