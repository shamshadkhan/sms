<header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <a id="leftmenu-trigger" class="tooltips" data-toggle="tooltip" data-placement="right" title="" data-original-title="Toggle Sidebar"></a>
        <div class="navbar-header pull-left" style="background-color:white">
            <a class="navbar-brand" href="index.php">SMS</a>
        </div>
        <ul class="nav navbar-nav pull-right toolbar">
          <li class="dropdown">
            <a href="" class="dropdown-toggle username" data-toggle="dropdown"><span class="hidden-xs"><?php echo $_SESSION['name'];?>
              <i class="fa fa-caret-down"></i></span>
                            <img src="../photo/no_avatar.jpg" height="100px" width="100px" />
                  </a>
            <ul class="dropdown-menu userinfo arrow">
              <li class="username">
                  <a href="">
                    <div class="pull-left">
                                <img src="../no_avatar.jpg" height="40px" width="100px" />
                    </div>
                    <div class="pull-right"><h5>Hello, Admin!</h5>
                      <small>Logged in as <span>Admin/span></small></div>
                  </a>
              </li>
              <li class="userlinks">
                <ul class="dropdown-menu">
                  <li><a href="userprofile.php">Edit Profile <i class="pull-right fa fa-pencil"></i></a></li>
                  <li class="divider"></li>
                  <li><a href="index.php" class="text-right">Sign Out</a></li>
                </ul>
              </li>
            </ul>
          </li>
         </ul>
    </header>