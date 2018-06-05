<?php
class  add extends db {

    public function addtask ($task, $date) {
      $task = "'" .$task ."', ";
      $date = "'" .$date ."'";
      if(isset($_SESSION["login"])){

          if($_SESSION["login"]){
            $username ="'".$_SESSION["name"]."'";

          }else{
              $username ="'demo'";
          }
      }else{
      $username ="'demo'";
    }
    
        $sql = "INSERT INTO todolist (username, task, date) VALUES (".$username.",".$task.$date.")";
        $result = $this->connect()->query($sql);

    }
}
?>
