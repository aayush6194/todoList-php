<?php
  include 'includes/db-inc.php';
    include 'includes/tasks.php';
      include 'includes/view.php';
      include 'includes/login.php';
        include 'includes/add.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="style/main.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>PHP</title>
  </head>

  <body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

     <table class="table table-hover hide" >
      <thead>
          <tr><th>Name</th>
              <th>Adress</th></tr>
      </thead>
        <tbody id="scores">

        </tbody>
    </table>
  <div class="valign">
      <div class="wrapper ">
        <div class="container small">
          <header>
            <nav>
              <div class="nav-wrapper">
                <ul id="nav-mobile" class="">
                  <li><a class="active" href="index.php">Home</a></li>
                  <li><a href="profile.php">Profile</a></li>
                </ul>
                <i class="material-icons right">settings</i>
              </div>
            </nav>
          </header>

        <ol class="collapsible">

          <?php  $tasks = new view();
            $tasks->showTasks();
            ?>
        </ol>

          <form method="POST">
               <input type="text" value="" name="task" placeholder="Enter a task...">
               <button type="submit" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons right">add</i></button>
          </form>

        </div>
      </div>
  </div>


    <?php
    if(isset($_POST['task']))
    {
      $task = $_POST['task'];

       $users = new add();
       $users->addtask($task);
    }

    if(isset($_POST['remove']))
    {


     echo "<script>console.log('ssdsdsd');</script>";
    }
     ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="src/main.js"></script>

  </body>
</html>
