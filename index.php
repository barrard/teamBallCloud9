<?php include 'head.php'; ?>
<?php include 'header.php'; ?>
<?php if (isset($_GET['page'])) {
	if ($_GET['page']=='logout') {	
		include 'logout.php';
  }elseif ($_GET['page']=='quitgame') {
    include 'quitGame.php';
  } }?>
<div class=''>
  <div id='getStatsFromDB'></div>
  <div id='resumeGame'>resumeGame</div>
<?php echo 'teamName =  <span id="teamName">'.$_SESSION['teamName'].'</span><br>'; ?>
<?php echo 'teamId =  <span id="teamId">'.$_SESSION['teamId'].'</span><br>'; ?>
<?php echo 'opponentName = <span id="opponentName">'.$_SESSION['opponentName'].'</span><br>'; ?>
<?php echo 'opponentId =  <span id="opponentId">'.$_SESSION['opponentId'].'</span><br>'; ?>
<?php echo 'gameId =  <span id="gameId">'.$_SESSION['gameId'].'</span><br>'; ?>
<?php print_r($_SESSION); ?>
</div>


<?php if ($loggedin&&$startGame){
   include 'mainContent.php';
}elseif($loggedin && !$startGame){
	include 'matchup.php';
}else{
	include 'login.php';
	echo"<br><br><br><h2>OR</h2><br><br>";
	include 'register.php';

} ?>








	<script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="/js/vendor/fastclick.js"></script>
    <script src="js/foundation.min.js"></script>
    <script type="text/javascript" src="js/foundation/foundation.reveal.js"></script>
    <script src="js/app.js"></script>

   <script type="text/javascript"> 
       $(document).foundation();
   </script>
   <?php if ($loggedin&&$startGame){
   	echo "<script>console.log('The Game Has Started');
    getVisitorTeamList();getHomeTeamList();</script>";
} ?>

</body>
</html>