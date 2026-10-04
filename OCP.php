<?php
declare(strict_types=1);
interface NotificationInterface{
  public function send(string $message);
}
class SmsNotification implements NotificationInterface{
  public function send(string $message){
    echo "SMS sent:{$message}<br>";
  }
}
class EmailNotification implements NotificationInterface{
  public function send(string $message){
    echo "Email Sent:{$message}<br>";
  }
}
class NotificationService{
  public function notify(NotificationInterface $notifier,string $message){
    $notifier->send($message);
  }
}
$service=new NotificationService();
$sms=new SmsNotification();
$service->notify($sms,"Your OTP is 4589");
$email=new EmailNotification();
$service->notify($email,"Welcome to our platform!");