<?php 
session_start();
include 'connection/database.php';


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