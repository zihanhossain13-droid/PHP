<!---HTML FORM--->
<form method="POST" action="index.php">
  <input type="text" name="name">
  <input type="number" name="age">
  <button type="submit">Submit</button>
</form>
//php  
<?php
$name=$_POST["name"];
$age=$_POST["age"];
echo $name;
echo $age;
?>