<?php
class  tasks extends db {
    public function getTasks (){
      if(isset($_SESSION['login'])){
        if($_SESSION['login']){
          $sql = "SELECT * FROM todolist WHERE username='".$_SESSION['email']."' ORDER BY id  DESC LIMIT 5 ";
          }
        else{
            $sql = "SELECT * FROM todolist ORDER BY id  DESC LIMIT 5 ";
          }
       }
       else{
          $sql = "SELECT * FROM todolist ORDER BY id  DESC LIMIT 5 ";
       }

          $result = $this->connect()->query($sql);
          $numRows = $result->num_rows;

          if($numRows > 0){
            while($row = $result->fetch_assoc()){
              $data[] = $row;
            }
            return $data;
          }
          else {
            return false;
          }
    }

    public function getTasksNum () {
      if(isset($_SESSION['login'])){
          if($_SESSION['login']){
            $sql2 = "SELECT * FROM todolist WHERE username='".$_SESSION['email']."' ORDER BY id  DESC ";
          }
          else{
            $sql2 = "SELECT * FROM todolist ORDER BY id";
          }
    }
    else {
        $sql2 = "SELECT * FROM todolist ORDER BY id";
    }
        $num = 0;
        $numResults = ($this->connect()->query($sql2));
        try{
        if($numResults){
        $num =  $numResults->num_rows;
        }
        return $num;
      }
      catch (Exception $x)
      {
        return 0;
      }
    }
}


?>
