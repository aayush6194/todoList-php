<?php
  include 'components.php';
  include 'authenticate.php';
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
    <style>
    html, body {height:100vh;}
    </style>
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
              <center>
                <form class="col s12" method="POST">
                <div class="row">

                  <div class="row">
                    <div class="input-field col s12">
                      <input id="email" type="email" class="validate" name="username" value="">
                      <label for="email">Email</label>
                    </div>
                  </div>
                </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="password" type="password" class="validate" name="password" value="">
                      <label for="password">Password</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col s12">
                <button class="btn start" type="submit">Log In </button><br><br>
                  </form>
                      <a href="../index.php?s=cs" class="btn start">Go Back</a><br><br>
                          </div>
                    </div>
            </center>
        </div>
            <footer class="page-footer  red lighten-1">  ©  <?php echo date("Y") ?> Copyright Text</footer>
          </div>
        </div>
      </div>
      <?php

      if(isset($_POST['username']) && isset($_POST['password'])){
        $checking = new authenticate();
        $uname = $_POST['username'];
        $password =  $_POST['password'];
        $checking->checkUser($uname,$password);
      }
       ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  </body>
</html>
