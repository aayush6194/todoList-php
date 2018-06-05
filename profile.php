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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="style/main.css">
    <link rel="icon" href="favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>TODO-LIST</title>
    <style>
    html, body {height:100vh;}
    </style>
  </head>
  <body>
      <div class="wrapper blue lighten-5">
          <div class="dummy">
          <div class="container small ">
            <?php
            $index = new components();
            echo $index->nav();
            echo "<br>";
            if(isset($_SESSION['login'])){
              if($_SESSION['login']){
                echo $index->indexBody($_SESSION["name"]);
              }else{
                  echo $index->indexBody(null);
              }
          }
          else{
              echo $index->indexBody(null);
          }
            echo $index->footer();
            ?>
          </div>
        </div>
      </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </body>
</html>
