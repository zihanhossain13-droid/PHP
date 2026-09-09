<?php
$host="localhost";
$dbname="school";
$username="root";
$password="";
try{
  $pdo=new PDO(
    "mysql:host=$host;dbname=$dbname",
    $username,
    $password
  );
  $sql="INSERT INTO students(name,email)VALUES(?,?)";
  $stmt=$pdo->prepare($sql);
  $stmt->execute(["Zihan","zihanhossain@gmail.com"]);
}catch(Exception $e){
  echo "Connection Failed:".$e->getMessage();
}
?>