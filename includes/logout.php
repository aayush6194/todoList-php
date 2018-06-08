<?php
function logout(){
  session_start();
  $_SESSION["name"] = null;
  $_SESSION["email"] = null;
  $_SESSION["login"] = false;
  header("location: ../index.php");
}

logout();
  ?>
