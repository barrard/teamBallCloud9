<?php 
include 'connection/database.php';


// echo $mysqli->host_info . "\n";

if (!empty($_POST['shotId'])) {
	$shotId = '';
	$eventCoordsX = '';
	$eventCoordsY = '';
	$playerId = '';
	$shotType = '';
	$teamId ='';
	$time= '';
	$player= '';
	$gameId= '';
	$foundIcon='';
	$shotId = $_POST['shotId'];
	$eventCoordsX = $_POST['eventCoordsX'];
	$eventCoordsY = $_POST['eventCoordsY'];
	$playerId = $_POST['playerId'];
	$shotType = $_POST['shotType'];
	$teamId = $_POST['teamId'];
	$time=$_POST['time'];
	$player=$_POST['player'];
	$gameId=$_POST['gameId'];
	$foundIcon=$_POST['foundIcon'];
	$iconColor=$_POST['iconColor'];

	$sql = "INSERT INTO playerStats (shotId, eventCoordsX, eventCoordsY, playerId, shotType, teamId, time, player, gameId, foundIcon, iconColor) VALUES ('$shotId', '$eventCoordsX', '$eventCoordsY', '$playerId', '$shotType', '$teamId', '$time', '$player', '$gameId', '$foundIcon', '$iconColor')";
	if (mysqli_query($db, $sql) or trigger_error(mysqli_error($db)." in ".$sql)) {
		//echo "Stats for Player ".$player." added succesfully to the database.";
	}else{
		echo "Stats for Player ".$playerId." NOT added succesfully to the database.";
	}
}
?>