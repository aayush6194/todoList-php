<?php
class  add extends db {

    public function addtask ($task, $date, $email) {
      $task = "'" .$task ."', ";
      $date = "'" .$date ."'";
      $email ="'".$email."'";

        $sql = "INSERT INTO todolist (username, task, date) VALUES (".$email.",".$task.$date.")";
        $result = $this->connect()->query($sql);

    }
}
?>
