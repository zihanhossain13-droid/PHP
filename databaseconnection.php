<?php
$host="localhost";
$dbname="school";
$username="root";
$password="";
try{
  $pdo=new PDO(
    "mysql:host=$host;dbname=$dbname",$username,$password);
    echo "Database connected";
  
  }catch(PDOException $e){
  echo "Connection Failed". $e->getMessage();
  }

?>