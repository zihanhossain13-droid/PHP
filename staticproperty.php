<?php
class User{
  public static int $count=0;
}
User::$count++;
User::$count++;
echo User::$count;
?>