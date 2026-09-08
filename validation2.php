<!--HTML FORM--->
<form method="POST">
  <input type="text" name="name">
  <input type="number" name="age">
  <button type="submit">Submit</button>
</form>
//php
<?php
if(isset($_POST["name"])&&isset($_POST["age"])){
  $name=$_POST["name"];
  $age=$_POST["age"];
  if($name=="" || $age==""){
    echo "Name and age is required";
  }else{
    echo "Name:$name Age:$age";
  }
}
?>
