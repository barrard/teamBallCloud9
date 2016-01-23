<?php 

$db = new mysqli("localhost", "root", "portland", "TeamBall");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}

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
	$shotId = $_POST['shotId'];
	$eventCoordsX = $_POST['eventCoordsX'];
	$eventCoordsY = $_POST['eventCoordsY'];
	$playerId = $_POST['playerId'];
	$shotType = $_POST['shotType'];
	$teamId = $_POST['teamId'];
	$time=$_POST['time'];
	$player=$_POST['player'];
	$gameId=$_POST['gameId'];

	$sql = "INSERT INTO playerStats (shotId, eventCoordsX, eventCoordsY, playerId, shotType, teamId, time, player, gameId) VALUES ('$shotId', '$eventCoordsX', '$eventCoordsY', '$playerId', '$shotType', '$teamId', '$time', '$player', '$gameId')";
	if (mysqli_query($db, $sql) or trigger_error(mysqli_error($db)." in ".$sql)) {
		echo "Stats for Player ".$playerId." added succesfully to the database.";
	}else{
		echo "Stats for Player ".$playerId." NOT added succesfully to the database.";
	}
}
?>