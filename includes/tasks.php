<?php

class  tasks extends db {

    public function getTasks () {
    if($_SESSION['login'])
    {
            $sql = "SELECT * FROM todolist ORDER BY id  DESC LIMIT 5 ";
    }
    else {
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
}


?>
