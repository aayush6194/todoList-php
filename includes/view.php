<?php
class  view extends tasks {

    public function showTasks () {
        $datas = $this->getTasks();

      if($datas != false){
          foreach($datas as $data){
            echo "<input type='hidden' name='remove' value='".$data['task']."'><div class='card-panel'><li>";
            echo "<b class='truncate'>".$data['task']."</b>";
            echo "<a href='includes/remove.php?taskselected=".$data['id']."'><button class='btn-floating right hoverable' ><i class='material-icons'>check</i></button></a></li></div> ";
          }
        }
        else{
          echo "<div class='card-panel'>";
          echo "No task. All caught up!</div> ";
        }
    }
}
?>
