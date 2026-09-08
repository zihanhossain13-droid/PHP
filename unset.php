<?php
session_start();
$_SESSION["username"]="Zihan";
$_SESSION["role"]="Admin";
unset($_SESSION["username"]);
if(isset($_SESSION["username"])){
  echo $_SESSION["username"];
}else{
  echo "Not found";
}
?>