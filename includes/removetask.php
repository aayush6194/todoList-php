<?php
include "db-inc.php";
  include 'remove.php';

   $task = $_GET['taskselected'];
   $removetask = new remove();
   $removetask->removetask($task);
   echo "<script>window.location = 'http://localhost:8181/todoList-php/';</script>"
 ?>
