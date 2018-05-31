<?php

class  add extends db {

    public function addtask ($task) {
      $task = "'" .$task ."'";
      $username ="'null'";
        $sql = "INSERT INTO todolist (username, task) VALUES (".$username.",".$task.")";
        $result = $this->connect()->query($sql);


    }
}


?>
