<?php


class  remove extends db {

    public function removetask ($task) {
      $task = "'" .$task ."'";

        $sql = "DELETE FROM todolist WHERE id=".$task;
        $result = $this->connect()->query($sql);


    }
}


?>
