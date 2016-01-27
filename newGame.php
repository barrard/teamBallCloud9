<?php 
session_start();
include('connection/database.php');


if ((!empty($_GET['homeTeamId']))&&(!empty($_GET['visitorTeamName']))){

	$homeTeamId = mysqli_real_escape_string($db, $_GET['homeTeamId']);
	$visitorTeamId = mysqli_real_escape_string($db,$_GET['visitorTeamId']);
	$homeTeamName = mysqli_real_escape_string($db,$_GET['homeTeamName']);
	$visitorTeamName = mysqli_real_escape_string($db,$_GET['visitorTeamName']);
	$dateString = mysqli_real_escape_string($db,$_GET['dateString']);



	$query = "INSERT INTO game (homeTeamId, visitorTeamId, homeTeamName, visitorTeamName, dateString) VALUES ('$homeTeamId', '$visitorTeamId', '$homeTeamName','$visitorTeamName', '$dateString')";
	mysqli_query($db, $query) or trigger_error(mysqli_error($db)." in ".$query);

	$_SESSION['gameId'] = mysqli_insert_id($db);
	$_SESSION['opponentName'] = $visitorTeamName;
	$_SESSION['opponentId'] = $visitorTeamId;
	//$startGame = true;
	// echo $startGame;
	 }?>



