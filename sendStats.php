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
	$shotId = $_POST['shotId'];
	$eventCoordsX = $_POST['eventCoordsX'];
	$eventCoordsY = $_POST['eventCoordsY'];
	$playerId = $_POST['playerId'];
	$shotType = $_POST['shotType'];
	$sql = "INSERT INTO playerStats (shotId, eventCoordsX, eventCoordsY, playerId, shotType) VALUES ('$shotId', '$eventCoordsX', '$eventCoordsY', '$playerId', '$shotType')";
	if (mysqli_query($db, $sql) or trigger_error(mysqli_error($db)." in ".$sql)) {
		echo "Stats for Player ".$playerId." added succesfully to the database.";
	}else{
		echo "Stats for Player ".$playerId." NOT added succesfully to the database.";
	}
}
?>