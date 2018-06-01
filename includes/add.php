<?php
class  add extends db {

    public function addtask ($task) {
      $task = "'" .$task ."'";
      if(isset($_SESSION["login"])){
        
          if($_SESSION["login"]){
            $username ="'".$_SESSION["name"]."'";

          }else{
              $username ="'demo'";
          }
      }else{
      $username ="'demo'";
    }
        $sql = "INSERT INTO todolist (username, task) VALUES (".$username.",".$task.")";
        $result = $this->connect()->query($sql);
    }
}
?>
