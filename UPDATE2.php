<?php
session_start();
$_SESSION["username"]="Zihan";
$_SESSION["age"]=24;
$_SESSION["role"]="Developer";
echo $_SESSION["username"];
echo $_SESSION["role"];
?>