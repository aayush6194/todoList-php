<?php

class  login extends db {

    public function correct ($name, $password) {

        $sql = "SELECT * FROM user WHERE name='".$name."' AND password='".$password."'";
        $result = $this->connect()->query($sql);

        $numRows = $result->num_rows;

        if($numRows > 0){
          echo "<h1>sucess!</h1>";
        }
        else{
          echo "failed!";
        }
    }
}


?>
