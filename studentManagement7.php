<?php

$host = "localhost";
$dbname = "students";
$username = "root";
$password = "";

try {
    // DATABASE CONNECTION

    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $username,
        $password
    );

    echo "Database connected<br>";
    // INSERT 1

    $sql = "INSERT INTO students
            (name, email, age, city)
            VALUES
            (:name, :email, :age, :city)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        "name" => "Zihan Hossain",
        "email" => "zihan@gmail.com",
        "age" => 20,
        "city" => "Dhaka"
    ]);

    // INSERT 2

    $sql = "INSERT INTO students
            (name, email, age, city)
            VALUES
            (:name, :email, :age, :city)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        "name" => "Rahim",
        "email" => "rahim@gmail.com",
        "age" => 22,
        "city" => "Gazipur"
    ]);

    if ($stmt->rowCount() > 0) {
        echo "Insert Successful<br>";
    } else {
        echo "No data inserted<br>";
    }

    // SELECT ALL

    $sql = "SELECT * FROM students";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

    print_r($students);

    echo "<br>";
    // SELECT ONE

    $sql = "SELECT * FROM students WHERE name = :name";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        "name" => "Zihan Hossain"
    ]);

    $student = $stmt->fetch(PDO::FETCH_ASSOC);

    print_r($student);

    echo "<br>";

    // UPDATE CITY

    $sql = "UPDATE students
            SET city = :city
            WHERE email = :email";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        "city" => "Chittagong",
        "email" => "zihan@gmail.com"
    ]);

    if ($stmt->rowCount() > 0) {
        echo "Update Successful<br>";
    } else {
        echo "No data updated<br>";
    }
    // UPDATE MULTIPLE FIELDS

    $sql = "UPDATE students
            SET name = :name,
                age = :age,
                city = :city
            WHERE email = :email";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        "name" => "Karim",
        "age" => 25,
        "city" => "Sylhet",
        "email" => "zihan@gmail.com"
    ]);

    if ($stmt->rowCount() > 0) {
        echo "Update Successful<br>";
    } else {
        echo "No data updated<br>";
    }

    // DELETE
    

    $sql = "DELETE FROM students WHERE email = :email";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        "email" => "zihan@gmail.com"
    ]);

    if ($stmt->rowCount() > 0) {
        echo "Delete Successful<br>";
    } else {
        echo "No data deleted<br>";
    }
  //Search
  $search="Rah";
  $sql="SELECT * FROM students WHERE name LIKE :name";
  $stmt=$pdo->prepare($sql);
  $stmt->execute(["name"=>"$search%"]);
  $students=$stmt->fetchAll(PDO::FETCH_ASSOC);
  print_r($students);
  $sql="SELECT * FROM students ORDER BY age DESC";
  $stmt=$pdo->prepare($sql);
  $stmt->execute();
  $students=$stmt->fetchAll(PDO::FETCH_ASSOC);
  print_r($students);


} catch (PDOException $e) {

    echo "Database Error: " . $e->getMessage();

}

?>