<?php
interface LoggerInterface{
  public function log(string $message);
}
class DatabaseLogger implements LoggerInterface{
  public function log(string $message){
    return "Database Log:{$message}";
  }
}
$data=new DatabaseLogger();
echo $data->log("Connection failed");

?>