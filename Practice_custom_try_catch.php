<?php
class InvalidAgeException extends Exception{}
class UserRegistration{
  public function register(int $age){
    if($age<18){
      throw new InvalidAgeException("Must be at least 18years old!");
    }
    return "User registered successfully.";
  }
}
try{
  $user=new UserRegistration();
  echo $user->register(15);
  
}catch(InvalidAgeException $e){
  echo "Custom Error:" .$e->getMessage();
}catch(Exception $e){
  echo "General Error:" . $e->getMessage();
}