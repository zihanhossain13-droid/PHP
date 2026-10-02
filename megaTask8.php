<?php
class User{
  public static int $userCount=0;
  public function __construct(public string $name){
    self::$userCount++;
  }
  public static function getTotalUsers(){
    return "Total Users Registered:".self::$userCount;
  }
}
$user1=new User("Sabbir");
$user2=new User("Zihan");
$user3=new User("Rakib");
echo User::getTotalUsers();
?>