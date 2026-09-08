<?php
if(isset($_COOKIE["name"])){
  echo "Name:".$_COOKIE["name"];
}else{
  echo "Name not found.";
}
?>