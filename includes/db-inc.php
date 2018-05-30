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

      return $conn;
    }
}

// 1. Login authorization.
// 2. Display task corresponding to the user (session ="logged in" sesson"user").
// 3.  safegaurd sql injection/prepared statements.
// 4. Prevent auto submit on page reload.

?>
