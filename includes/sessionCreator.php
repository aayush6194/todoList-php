<?php

class sessionCreator {

  public static function loggedIn ($name){
    $_SESSION["name"] = $name;
    $_SESSION["login"] = true;
  }

  public static function loggedOut (){
    $_SESSION["name"] = null;
      $_SESSION["email"] = null;
    $_SESSION["login"] = false;
  }
}

?>
