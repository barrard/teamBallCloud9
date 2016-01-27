<div class="row"> 
<div class="top-bar" id="example-menu">
  <?php if (!$startGame) { ?>

  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text"><a href="index.php">Team | Ball</a></li>
      <li class="has-submenu">
        <a href="#">Settings<span class="secondary badge"><i class="fi-power"></i></span></a>
        <ul class="submenu menu vertical" data-submenu>

          <li><a href="#">One</a></li>
          <li><a href="#">Two</a></li>
          <li><a href="#">3</a></li>
        </ul>
      </li>
      <li> startGame = <?php echo $startGame; ?>
      </li>
      <?php if (!$loggedin) { ?>
        
      
      <li><a href="#">Register</a></li>
    <?php } ?>
    <li>
      <a class="button info" id='startGameBtn'href="#" onclick='
      getHomeTeamList();'>Start Game</a>
    </li>
    </ul>
    </div>
 <?php }else{ ?>
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text"><a href="index.php">Team | Ball</a></li>
      <li class="has-submenu">
        <a href="#">Settings for <?php echo $_SESSION['teamName']; ?>
<span class="secondary badge"><i class="fi-power"></i></span></a>
        <ul class="submenu menu vertical" data-submenu>

          <li><a onclick='quitGame();'href="#matchUp">MatchUp!</a></li>
          <li><a href="#">Two</a></li>
          <li><a href="#">three</a></li>
        </ul>
      </li>
      <li> startGame = <?php echo $startGame; ?>
      </li>
      <li><a href="#openModal">Add Player to the Roster</a></li>
    <li>
  <h4><?php echo $_SESSION['teamName']; ?> <strong>vs.</strong> <?php echo $_SESSION['opponentName']; ?></h4>
    </li>
    </ul>
    </div>

<?php } ?>
    <div class="top-bar-right">
      <div id='resptxt'></div>
  <?php if ($loggedin) { ?>
       <div id='NEWTEST'></div>
    <div class="alert button full"> 
      <a href="http://localhost/ballshotAJAX/?page=logout">Logout</a>
    </div>
  <?php }else{ ?>
  <div class="button success full">
    <a class="full" href="http://localhost/ballshotAJAX/?page=login">Login</a>
  </div>
  <?php } ?>
</div>
</div>
</div>
