<!--HTML FORM--->
<form method="POST">
  <input type="text" name="name">
  <input type="number" name="age">
  <button type="submit">Submit</button>
</form>
//php
<?php
if(isset($_POST["name"])){
  $name=$_POST["name"];
  if($name==""){
    echo "Name is required";
  }else{
    echo "Name:$name";
  }
}
?>
