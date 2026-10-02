<?php
trait Logger{
  public function log(string $message){
    return "[LOG]:{$message}";
  }
}
class File{
  use Logger;
}
$file=new File();
echo $file->log("File created");
?>