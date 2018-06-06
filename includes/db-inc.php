<?php
class  db {
  private $servername;
  private $username;
  private $password;
  private $dbname;

    public function connect () {
      $this->servername = "localhost";
      $this->username = "root";
      $this->password = "";
      $this->dbname = "todolists";

      $conn = new mysqli ($this->servername, $this->username, $this->password, $this->dbname);
      if(!$conn){
        $this->servername = "mysql2.gear.host";
         $this->username = "phptodolist1";
         $this->password = "poop123!";
         $this->dbname = "phptodolist1";
         $conn = new mysqli ($this->servername, $this->username, $this->password, $this->dbname);
      }
      return $conn;
    }
}
?>
