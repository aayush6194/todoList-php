<?php
include "db-inc.php";
class  remove extends db {

    public function removetask ($task) {
        $task = "'" .$task ."'";
        $sql = "DELETE FROM todolist WHERE id=".$task;
        $result = $this->connect()->query($sql);
    }
}

function mains (){
  $task = $_GET['taskselected'];
  $removetask = new remove();
  $removetask->removetask($task);
  header("location: ../home.php");
}

mains();
?>
