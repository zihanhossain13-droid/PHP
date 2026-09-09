<?php
$host="localhost";
$dbname="students";
$username="root";
$password="";
try{
  $pdo=new PDO(
    "mysql:host=$host;dbname=$dbname",
      $username,
      $password
  );
  $sql="UPDATE students SET name=:name WHERE email=:email";
  $stmt=$pdo->prepare($sql);
  $stmt->execute(["name"=>"Zihan","email"=>"zihan@gmail.com"]);
  
}catch(PDOException $e){
  echo "Database not found".$e->getMessage();
}
?>