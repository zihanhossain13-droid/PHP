<?php
trait Logger{
  public function Log(){
    return "Logging...";
  }
}
  class User{
    use Logger;
  }
class Admin{
  use Logger;
}
$user=new User();
$admin=new Admin();
echo $user->Log();
echo $admin->Log();

?>