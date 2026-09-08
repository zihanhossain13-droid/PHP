<?php
session_start();
$_SESSION["username"]="Zihan";
$_SESSION["role"]="Admin";
session_destroy();
?>