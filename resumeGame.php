<?php 
session_start();
$db = new mysqli("localhost", "root", "portland", "TeamBall");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}

if (!empty($_GET['gameId'])){

	$query = "SELECT * FROM game WHERE id = '$_GET[gameId]'";
	$rsd=mysqli_query($db, $query) or trigger_error(mysqli_error($db)." in ".$query);
while ($row = mysqli_fetch_array($rsd)) {
	$visitorTeamName=$row['visitorTeamName'];
	$visitorTeamId=$row['visitorTeamId'];
	$gameId=$row['id'];
}

	$_SESSION['gameId'] = $gameId;
	$_SESSION['opponentName'] = $visitorTeamName;
	$_SESSION['opponentId'] = $visitorTeamId;


	 }?>