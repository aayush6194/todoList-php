<?php
  include 'includes/db-inc.php';
  include 'includes/tasks.php';
  include 'includes/view.php';
  include 'includes/add.php';
  include 'includes/components.php';
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
    <link rel="stylesheet" href="style/main.css">
    <link rel="icon" href="favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>TODO-LIST</title>
    <style> html, body {height:100vh;} </style>
  </head>
  <body>

      <div class="wrapper white">
          <div class="dummy">
          <div class="container small ">
            <?php
              $comp = new components();

              if(isset($_SESSION["login"])){
                if($_SESSION["login"]){
                  echo $comp->nav3loggedIn("Home","Tasks",$_SESSION["name"]);
                }
                else {
                    echo $comp->nav3("Home","Tasks");
                }
              }
              else{
                echo $comp->nav3("Home","Tasks");
              }
              ?>
           <div class="mini-pic">
            <img src="public/profile.png" class="responsive-img ">
            <center><button class="btn disabled">Change Picture</button></center>
           </div>
            <div class="collection" >
             <a href="home.php" class="collection-item"><span class="badge">
               <?php
                //$taskNum = new tasks();
              //  echo $taskNum->getTasksNum();
              ?>
              </span>Tasks</a>
             <a href="#!" class="collection-item"><span class="badge "><?php if(isset($_SESSION['email'])){echo $_SESSION['email'];} ?></span>Email:</a>
             <a href="#!" class="collection-item"><span class="badge">Change</span>Password</a>
             <a href="#!" class="collection-item"><span class="badge">1.0.0</span>Version</a>

           </div>
           <?php
           $profile = new components();

           echo $profile->footer();
           ?>
          </div>
        </div>
      </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
  </body>
</html>
