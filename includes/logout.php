<?php
function logout(){
  session_start();
  $_SESSION["name"] = null;
  $_SESSION["email"] = null;
  $_SESSION["login"] = false;
  echo "<script>window.location='http://localhost:8181/todoList-php/index.php';</script>";
}

logout();
  ?>
