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
  $sql="INSERT INTO students(name,email)VALUES(?,?)";
  $stmt=$pdo->prepare($sql);
  $stmt->execute(["Zihan","zihanhossain@gmail.com"]);
  $sql="SELECT * FROM students";
  $stmt=$pdo->prepare($sql);
  $stmt->execute();
  $students=$stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($students);
  
}catch(PDOException $e){
  echo $e->getMessage();
}
?>