<?php
class  register extends db {

    public function addUser ($username, $password, $firstname) {
      $sql = "INSERT INTO allusers (username, password, name) VALUES (".$username. $password. $firstname.")";
      return $result = $this->connect()->query($sql);
    }

    public function existsUser($username){
      return false;
    }

}

?>
