<?php
setcookie("username","Zihan",time()-3600);
if(isset($_COOKIE["username"])){
  echo "Name:".$_COOKIE["username"];
}else{
  echo "NOT FOUND";
}
?>