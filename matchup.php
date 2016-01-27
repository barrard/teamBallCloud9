<?php 
include 'connection/database.php';
$sql ="SELECT * FROM teams WHERE teamId = $_SESSION[teamId]";
$rsd = mysqli_query($db, $sql);
while ($row = mysqli_fetch_array($rsd)) {
	$teamName=$row['teamName'];
} ?>



<?php
$sql ="SELECT * FROM teams WHERE teamId != $_SESSION[teamId]";
$rsd = mysqli_query($db, $sql);
 ?>

      <a class="button round info" id='startGameBtn'href="#" onclick='newGame();'>Start Game</a>
<div class="row">
	<div class="columns small-4">
		<form autocomplete="off" action=""method='post'>
			<input type="text" disabled value='<?php echo $_SESSION['teamName'] ?>'>
		<div class="row">
			<div class="collumns small-12">
				<h2>VS.</h2>
			</div>
		</div>
		<div class="row">
			<div class="columns small-12">
				<select onchange='getTeamInfo(this.value)'>
					<?php 
					$sql ="SELECT * FROM teams WHERE teamId != $_SESSION[teamId]";
					$rsd = mysqli_query($db, $sql);
					while ($row = mysqli_fetch_array($rsd)) {
					echo "<option value=".$row['teamName'].">".$row['teamName']."</option>"; } ?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="columns small-12">
				<div id='dateString'><?php echo Date('Y m/d h:i a'); ?></div>
			</div>
		</div>
		</form>		
	</div>
	<!-- Team Info For Matchup!!!! -->
	<div class="column small-8">
		Opponent Information
		<div id='opponentInfo'></div>

	</div>
</div><!-- row -->

<div id='resultHistory'>
<?php
echo 'Hello <span id="homeName">'.$teamName.'</span>';
echo '<br>';
echo '<br>';
echo '<div id="gameHistory">Please select an opponent</div>';
?>
</div>
