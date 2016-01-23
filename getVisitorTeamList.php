<?php 
include 'connection/session.php';
include 'connection/database.php';
$sql ="SELECT * FROM players WHERE teamId = $_GET[opponentId]";
$rsd = mysqli_query($db, $sql)or trigger_error(mysqli_error($db)." in ".$sql);
		$playerId=array();
		$players=array();
		$playerNumber=array();
		$starter=array();
		$position=array();
while ($row = mysqli_fetch_array($rsd)) {
		array_push($playerId, $row[0]);
		array_push($players, $row[2]);
		array_push($position, $row['3']);
		array_push($starter, $row['5']);
		array_push($playerNumber, $row['6']);
  } 



	$teamSize = count($players);

	$x = 0;

	while ($x < $teamSize) {
// 	echo	"console.log($teamSize);";
		echo "<li><div class='playerBox'>".$playerNumber[$x]."</div></li>";
$x++;

	}