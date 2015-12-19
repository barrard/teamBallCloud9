<div class="row"> 
<div class="top-bar" id="example-menu">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text"><a href="index.php">Team | Ball</a></li>
      <li class="has-submenu">
        <a href="#">Settings<span class="secondary badge"><i class="fi-power"></i></span></a>
        <ul class="submenu menu vertical" data-submenu>

          <li><a href="#">One</a></li>
          <li><a href="#">Two</a></li>
          <li><a href="?page=register">Register</a></li>
        </ul>
      </li>
      <li>
        <a href="#" id='rosterBtn'><span id=''class='playButtons badge primary'><i class='fa fa-user-plus'></i></span>Roster</a>
      </li>
      <li><a href="?page=register">Register</a></li>
    <li>
      <a class="button info" id='startGameBtn'href="" onclick='
      getHomeTeamList();'>Start Game</a>
    </li>
    </ul>
    </div>
  
    <div class="top-bar-right">
      <div id='resptxt'></div>
  <?php if ($loggedin) { ?>
       <?php echo 'Hello '. $_SESSION['teamName'].' '.$_SESSION['teamId'];?>
    <div class="alert button full"> 
      <a href="http://localhost/ballshot%20(AJAX)/?page=logout">Logout</a>
    </div>
  <?php }else{ ?>
  <div class="button success full">
    <a class="full" href="http://localhost/ballshot%20(AJAX)/?page=login">Login</a>
  </div>
  <?php } ?>
</div>
</div>
</div>
