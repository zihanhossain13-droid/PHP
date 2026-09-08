<?php
if(isset($_POST["name"])){
  $name=trim($_POST["name"]);
  if($name==""){
    echo "Name is required";
  }else{
    echo "Name:$name";
  }
}
?>