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
        <div class="wrapper ">
          <div class="container small ">
          <?php
            $comp = new components();
            echo $comp->warningModal("The task must be at least 3 character long!", "modal1","agree");
            echo $comp->warningModal("The date not set!", "modal2","continue");

            if(isset($_SESSION["login"])){
              if($_SESSION["login"]){
                echo $comp->nav2loggedIn("Home","Profile",$_SESSION["name"]);
              }
              else {
                  echo $comp->nav2("Home","Profile");
              }
            }
            else{
              echo $comp->nav2("Home","Profile");
            }
            ?>
           <ol class="collapsible">
            <?php
            $comp2 = new components();
              echo $comp2->search();
              $tasks = new view();
              $tasks->showTasks();
              ?>
          </ol>

            <form method="POST" class="row">
              <div class="row col s12">
                <div class="row col s12">
                  <div class="input-field col s9">
                    <input type="text" class="data data-task" value="" name="task" placeholder="Enter a task...">
                    </div>
                    <div class="input-field col s2" >
                    <button  class="btn data data-date red " id="setDate"> <i class="material-icons">perm_contact_calendar</i></button>
                    <input type="hidden" class="datepicker" name="date">
                    </div>
                  </div>
                </div>
                 <button type="submit"  class="btn-floating sha btn-large waves-effect waves-light red hoverable right"><i class="material-icons right">add</i></button>
                 <input type="hidden" class="modal-trigger modal1"  href="#modal1">
                 <input type="hidden" class="modal-trigger modal2"  href="#modal2">
            </form>
          </div>
        </div>
        <?php
        if(isset($_POST['task'])){
        if(strlen($_POST['task']) >= 3){

           $task = $_POST['task'];
           if(isset($_POST['date']) && strlen($_POST['date']) >= 3){
             $date =  $_POST['date'];

           }
           else{
                echo "<script> setTimeout(()=>{ $('.modal-trigger.modal2').click();}, 100);</script>";
           $date =  "";
                   }
           $users = new add();
           $users->addtask($task, $date);
           header("Refresh:0");
         }
         else{
           echo "<script>  setTimeout(()=>{ $('.modal-trigger.modal1').click()}, 100);</script>";
         }
        }
         ?>

           <script>
          //  var dateBtn = document.getElementById("datebtn");
          //  var date = document.getElementById("date");

          //dateBtn.addEventListener("click", ()=>{
          //event.preventDefault();
          //    setTimeout(()=>{date.click()});});

          $(document).ready(function(){
            $('.modal').hide();
            $('.modal-trigger').leanModal();
          });

            $("#setDate").click(function(event){
              event.preventDefault();
              $(".datepicker").pickadate({format: 'yyyy-mm-dd'});
              $(".datepicker").hide();
              setTimeout(()=>{$(".datepicker").click();}, 100);
          });
     </script>

  </body>
</html>
