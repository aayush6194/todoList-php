<?php
  include 'components.php';
  include 'db-inc.php';
  include 'register.php';
  session_start();
  $_SESSION["name"] = null;
  $_SESSION["email"] = null;
  $_SESSION["login"] = false;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="icon" href="favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>TODO-LIST</title>
    <style>html, body {height:100vh;}</style>
  </head>
  <body>
      <div class="wrapper">
          <div class="dummy">
          <div class="container small">
            <?php
            $nav = new components();
            echo $nav->nav();
            ?>
             <br>
            <div class="content">
              <center class="height-full">
                <form class="col s12" method="POST">
                  <div class="row">
                    <div class="col s6">
                    <input id="first_name" type="text" name="firstname" class="validate">
                     <label for="first_name">First Name</label>
                    </div>
                    <div class="col s6">
                      <input id="last_name" type="text" name="lastname" class="validate">
                      <label for="last_name">Last Name</label>
                    </div>
                  </div>
                <div class="row">
                  <div class="row col s11">
                    <div class="input-field center">
                      <input id="email" type="email" class="validate" name="username" value="">
                      <label for="email">Email</label>
                    </div>
                  </div>
                    <div class="row col s11">
                    <div class="input-field center">
                      <input id="password" type="password" class="validate" name="password" value="">
                      <label for="password">Password</label>

                    </div>
                    <label for="warning" class="left">Password should be 8 character long.<br>
                    </label><br>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col s12">
                      <button class="btn start  col s5" type="submit">Submit</button>
                  </form>
                      <a href="../index.php?s=cs" class="btn start col s5 right">Go Back</a>
                    </div>
                  </div>
            </center>
        </div>
       <footer  class="page-footer  red lighten-1">  ©  <?php echo date("Y") ?> Copyright Text</footer>
          </div>
        </div>
      </div>

      <?php
        $added = false;
        if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstname']) && isset($_POST['lastname'])){
          $adding = new register();
          $uname = "'".$_POST['username']."', ";
          $password =  "'".$_POST['password']."', ";
          $fname = "'".$_POST['firstname']."'";
          $lname = $_POST['lastname'];

          $adding->addUser($uname,  $password, $fname);
          if(!$adding->existsUser($uname)){
            if(strlen($_POST['password']) >= 8)
            {
           $added = $adding->addUser($uname,  $password, $fname);
         }
         else{
              echo "<script>alert('failed! Password needs to be atleast 8 characters long.');</script>";
         }
         }
          else{
             echo "<script>alert('failed! Email Already Exists');</script>";
         }

         if($added){
           $added = false;
           $_SESSION["name"] = $_POST['firstname'];
           $_SESSION["email"] = $_POST['user'];
           $_SESSION["login"] = true;
           echo "<script>alert('Creating your account! Welcome ".$_SESSION["name"]."');";
           header("location: ../home.php");
         }
        }

       ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  </body>
</html>
