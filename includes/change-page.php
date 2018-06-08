<?php
  include 'db-inc.php';
  include 'tasks.php';
  include 'view.php';
  include 'change.php';
  include 'components.php';
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
    <link rel="stylesheet" href="../style/main.css">
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
                $nav = new components();
                echo $nav->nav();
              ?>
           <div class="collection" >
             <center class="height-full">
               <form class="col s12" method="POST" >

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
                   <div class="input-field center">
                     <input id="password" type="password" class="validate" name="password" value="">
                     <label for="password">New Password</label>

                   </div>
                   <label for="warning" class="left">Password should be 8 character long.<br>
                   </label><br>
                 </div>
                 </div>
                 <div class="row">
                   <div class="col s12">
                     <button class="btn start  col s5" type="submit">Submit</button>
                 </form>
                     <a href="../profile.php" class="btn start col s5 right">Go Back</a>
                   </div>
                 </div>
           </center>
           <br>
           </div>
           <?php
           $comp = new components();
           echo $comp->footer();

            if(isset($_POST['email']))
            {}

           ?>
          </div>
        </div>
      </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
  </body>
</html>
