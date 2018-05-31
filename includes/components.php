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
                <i class="material-icons right">settings</i>
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
                <i class="material-icons right">settings</i>
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
}
 ?>
