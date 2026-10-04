<?php
declare(strict_types=1);
class User{
  public function __construct(public readonly string $name,
  public readonly string $email){}
}
class WelcomeEmailer{
  public function sendWelcomeEmail(User $user){
    echo "Welcome email sent to:{$user->email} (Hi {$user->name}!)<br>";
  }
}
class UserRegistration{
  public function __construct(private WelcomeEmailer $emailer){}
  public function register(User $user){
   echo "User {$user->name} registered successfully.<br>";
    $this->emailer->sendWelcomeEmail($user);
  }
}
$user=new User("Zihan","zihanhossain13@example.com");
$emailer=new WelcomeEmailer();
$registration=new UserRegistration($emailer);
$registration->register($user);