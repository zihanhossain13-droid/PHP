<?php
interface Login{
  public function login();
}
interface Logout{
  public function logout();
}
class User implements Login,Logout{
  public function login(){
    return "User logged in";
  }
  public function logout(){
    return "User logged out";
  }
}
$obj=new User();
$output=$obj->login();
echo $output;
$output2=$obj->logout();
echo $output2;
?>