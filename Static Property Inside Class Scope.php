<?php
class User{
  public static int $count=0;
  public function __construct(){
    self::$count++;
  }
  public static function getCount(){
    return self::$count;
  }
}
$user=new User();
$user2=new User();
$user3=new User();
echo User::getCount();
?>