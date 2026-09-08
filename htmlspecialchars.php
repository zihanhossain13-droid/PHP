<!--User Input:<script>alert("Hello")</script>-->
<?php
if(isset($_POST["name"])){
  $name=trim($_POST["name"]);
  $name=htmlspecialchars($name);
    if($name==""){
    echo "Name is required.";
    }else{
    echo "Name:$name";
    }
}
?>