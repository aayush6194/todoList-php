<?php

class  view extends tasks {

    public function showTasks () {
        $datas = $this->getTasks();

          foreach($datas as $data){
              echo "<forum method='remove'><li >
                <div class='collapsible-header full'>";

            echo "<b>".$data['id'].". ".$data['task']."</b>";
            echo "<button type='submit' class='btn-floating'><i class='material-icons'>check</i></button></div></li></forum> ";
          }

    }
}


?>
