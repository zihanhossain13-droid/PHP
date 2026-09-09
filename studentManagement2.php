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
  $students=$stmt->fetchALL(PDO::FETCH_ASSOC);
  print_r($students);
  $sql="UPDATE students SET email=? WHERE name=?";
  $stmt=$pdo->prepare($sql);
  $stmt->execute(["newzihan@gmail.com","Zihan"]);
  $sql="DELETE FROM students WHERE name=?";
  $stmt=$pdo->prepare($sql);
  $stmt->execute(["Zihan"]);
}
  catch(Exception $e){
    echo "Connection Failed:".$e->getMessage();
  }
?>