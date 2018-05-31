<?php
include "db-inc.php";

class  authenticate extends db {

    public function checkUser ($username, $password) {


      $sql = "SELECT * FROM allusers WHERE username='".$username."' AND password='".$password."'";
      $result = $this->connect()->query($sql);

        $numRows = $result->num_rows;

        if($numRows > 0){
          $data = $result->fetch_assoc();
          echo "<script>alert('Logging in! Welcome ".$data['name']."'); window.location='http://localhost:8181/todoList-php/home.php'</script>";
        }
        else{
          echo "<script>alert('Incorrect username or password!'); window.location=''</script>";
        }
    }


}

// function main(){
//
//   $checking = new authenticate();
//   $a = $_POST('username');
//   $b =  $_POST['password'];
//     return $checking->($a,$b);
// }
//
// echo main();
?>
