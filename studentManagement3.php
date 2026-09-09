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
  ); //ADD
  $sql="INSERT INTO students(name,email)Values(?,?)";
  $stmt=$pdo->prepare($sql);
  $stmt->execute(["Zihan","zihanhossain@gmail.com"]);
  //SELECT
  $sql="SELECT * FROM students";
  $stmt=$pdo->prepare($sql);
  $stmt->execute();
    $student=$stmt->fetch(PDO::FETCH_ASSOC);
  print_r($student);
    //UPDATE
    $sql="UPDATE students SET name=? WHERE email=?";
  $stmt=$pdo->prepare($sql);
  $stmt->execute(["Rahim","zihanhossain@gmail.com"]);
  //DELETE
  $sql="DELETE FROM students WHERE name=?";
  $stmt=$pdo->prepare($sql);
  $stmt->execute(["Zihan"]);
}
?>

