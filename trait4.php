<?php
trait Formatter{
  public function formatTitle(string $text){
    return strtoupper($text);
  }
}
trait Validator{
  public function isValid(string $text){
    return !empty($text);
    }
  }

class Document{
  use Formatter,Validator;
}
$use=new Document();
echo $use->formatTitle("my document title");
echo "<br>";
var_dump($use->isValid("some text"));
?>