<?php
interface NotifierInterface{
  public function send(string $msg);
}
trait EmailHelper{
  public function formatEmail(string $msg){
    return "Email Body:{$msg}";
  }
}
class EmailNotifier implements NotifierInterface{
  use EmailHelper;
  public function send(string $msg){
    return $this->formatEmail($msg);
  }
}
$email=new EmailNotifier();
echo $email->send("Welcome User");
?>