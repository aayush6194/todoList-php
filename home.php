<?php
  include 'includes/db-inc.php';
  include 'includes/tasks.php';
  include 'includes/view.php';
  include 'includes/add.php';
  include 'includes/components.php';
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
        <div class="wrapper ">
          <div class="container small">
            <?php
            $comp = new components();
            echo $comp->nav2("Home","Profile");
            ?>
           <ol class="collapsible">
            <?php
            $comp2 = new components();
              echo $comp2->search();
              $tasks = new view();
              $tasks->showTasks();
              ?>
          </ol>
            <form method="POST">
                 <input type="text" value="" name="task" placeholder="Enter a task...">
                 <button type="submit" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons right">add</i></button>
            </form>
          </div>
        </div>


        <?php
        if(isset($_POST['task'])){
        if(strlen($_POST['task']) >= 5)
        {  $task = $_POST['task'];

           $users = new add();
           $users->addtask($task);
         }
         else{
           echo "<div id='warning' class='modal'>
                   <div class='modal-content'>
                     <h4>Warning!</h4>
                     <p>The task must be at least 3 character long!</p>
                   </div>
                 </div>";
         }
        }
         ?>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


  </body>
</html>
