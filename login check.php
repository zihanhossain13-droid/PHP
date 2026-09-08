<?php
session_start();
$_SESSION["username"]="Zihan";
if(isset($_SESSION["username"])){
  echo "User logged in";
}else{
  echo "Not logged in";
}
?>