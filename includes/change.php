<?php
class change extends db {
  public function changeEmail ($newEmail, $email){
    $newEmail = "'" .$newEmail."'";
    $email = "'" .$email."'";
    $sql = "UPDATE todolist SET email = ".$newEmail." WHERE user=".$email;
    return $result = $this->connect()->query($sql);
  }

  public function changePassword ($newPassword, $email){
    $newPassword = "'" .$newPassword."'";
    $email = "'" .$email."'";
    $sql = "UPDATE todolist SET password = ".$newPassword." WHERE user=".$email;
    return $result = $this->connect()->query($sql);
  }

}

 ?>
