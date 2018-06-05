<?php
class components {

  public function nav() {
    return '<nav>
            <div class="nav-wrapper  red lighten-1">
            <div class="heading">TODO LIST</div>
             </div>
            </nav>';
  }

  public function nav2 ($arg1, $arg2) {
    return '<header>
            <nav>
              <div class="nav-wrapper  red lighten-1">
                <ul id="nav-mobile" class="">
                  <li><a class="active" href="index.php">'.$arg1.'</a></li>
                  <li><a href="profile.php">'.$arg2.'</a></li>
                </ul>
                <ul id = "dropdown" class = "dropdown-content right" >
                   <li><a href = "#" style="color:red;">Task</a></li>
                   <li><a href = "includes/login-page.php" style="color:red;">Sign In</a></li>
                    <li><a href = "includes/signup-page.php" style="color:red;">Sign Up</a></li>
                </ul>
                <a class = "dropdown-button right" href = "#" data-activates = "dropdown">
                <i class = "mdi-navigation-arrow-drop-down material-icons right">settings</i></a>

              </div>
            </nav>
          </header>';
  }

  public function nav2LoggedIn ($arg1, $arg2, $name) {
    return '<header>
            <nav>
              <div class="nav-wrapper  red lighten-1">
                <ul id="nav-mobile" class="">
                  <li><a href="index.php" >'.$arg1.'</a></li>
                  <li><a href="profile.php">'.$arg2.'</a></li>
                </ul>
                <ul id = "dropdown" class = "dropdown-content right">
                   <li><a href = "#" style="color:red;" class="option">Task</a></li>
                   <li><a style="color:red;" href="includes/logout.php">Log Out</a></li>
                </ul>
                <a class = "dropdown-button right"  data-activates = "dropdown">
                <i class = "material-icons right">settings</i></a></a>
                <span class="right">Hello, '.ucfirst($name).'!</span>
              </div>
            </nav>
          </header>';
  }

  public function search(){
    return '  <form action="includes/search.php">
                <div class="input-field">
                  <input id="search" type="search" required >
                  <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                  <i class="material-icons">close</i>
                </div>
              </form>';
  }

  public function indexBody($user){
    if($user == null){
    return '<div class="content red lighten-1">
                  <center>
                    <img src="img1.png" class="materialboxed logo" ><br><br><br>
                    <a href="home.php"><button class="btn start  hoverable">Demo</button></a><br><br>
                    <a href="includes/login-page.php"><button class="btn start  hoverable">Log In</button></a><br><br>
                    <a href="includes/signup-page.php">Sign up now!</a>
                  </center>
              </div>';}
    else{
      return '<div class="content red lighten-1">
                    <center>
                      <img src="img1.png" class="materialboxed logo" ><br><br><br>
                      <a href="includes/logout.php"><button class="btn start  hoverable truncate">Log Out as '.$user.'</button></a><br><br>
                      <a href="includes/signup-page.php">Sign up as new user!</a>
                    </center>

                </div>';
    }
  }
  public function footer(){
      return '<footer class="page-footer  red lighten-1">  © '. date("Y"). ' Copyright </footer>';
}


  public function warningModal($message, $name, $button){
    return "<div id='".$name."' class='modal'>
       <div class='modal-content'>
         <h4>Warning!</h4>
         <p>".$message."</p>
       </div>
        <div class='modal-footer'>
        <a href='#!' class='modal-action modal-close waves-effect red btn-flat'>".$button."</a>
           </div>
     </div>";
  }
}
 ?>
