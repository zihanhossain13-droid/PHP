<?php
session_start();
$_SESSION["username"]="Zihan";
if(isset($_SESSION["username"])){
  echo $_SESSION["username"];
}else{
  echo "No username";
}
?>