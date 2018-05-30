<?php

class  tasks extends db {

    public function getTasks () {

        $sql = "SELECT * FROM todolist";
        $result = $this->connect()->query($sql);

        $numRows = $result->num_rows;

        if($numRows > 0){
          while($row = $result->fetch_assoc()){
            $data[] = $row;
          }
          return $data;
        }
    }
}


?>
