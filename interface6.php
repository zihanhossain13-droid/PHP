<?php
interface ReadableInterface{
  public function read();
}
interface WritableInterface{
  public function write(string $data);
}
class FileStream implements ReadableInterface,WritableInterface{
  public function read(){
    return "Reading file...";
  }
  public function write(string $data){
    return "Writing {$data} to file...";
  }
}
$filestream=new FileStream();
echo $filestream->read();
echo $filestream->write("Hello");
?>