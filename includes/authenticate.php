<?php
session_start();
include "db-inc.php";
include "sessionCreator.php";

class  authenticate extends db {

    public function checkUser ($username, $password) {
      $sql = "SELECT * FROM allusers WHERE username='".$username."' AND password='".$password."'";
      $result = $this->connect()->query($sql);
      $numRows = $result->num_rows;
      if($numRows > 0){
          $data = $result->fetch_assoc();
          // $login = new sessionCreator();
          // $login->loggedIn($data['name']);

          $_SESSION["name"] = $data['name'];
          $_SESSION["email"] = $data['user'];
          $_SESSION["login"] = true;
          echo "<script>alert('Logging in! Welcome ".$data['name']."'); </script>";
          header("location: http://localhost:8181/todoList-php/home.php");

        }
        else{
          echo "<script>alert('Incorrect username or password!'); window.location=''</script>";
        }
    }

}

?>
