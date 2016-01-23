<?php 
include 'connection/session.php';
include 'connection/database.php';
$sql ="SELECT * FROM players WHERE playerId = $_GET[player]";
$rsd = mysqli_query($db, $sql);
		$playerId='';
		$players='';
		$playerNumber='';
		$starter='';
		$position='';
		$lastName='';
		$playerNotes='';
while ($row = mysqli_fetch_array($rsd)) {

		$playerId= $row['0'];
		$players= $row['2'];
		$position= $row['3'];
		$lastName= $row['4'];
		$starter= $row['5'];
		$playerNumber= $row['6'];
		$playerNotes=$row['7'];
  } 

  // echo $playerId+"<br>";
  // $formValues[]= $playerId, $players, $position, $lastName, $starter, $playerNumber, $playerNotes;
  echo($playerId);
  echo ",";
  echo($players);
  echo ",";
  echo($position);
  echo ",";
  echo($playerNumber);
  echo ",";
  echo($playerNotes);
  echo ",";
  echo($starter);
  echo ",";
  echo($lastName);
  // echo($formValues[0][0]);
  // echo($formValues[0][1]);
  // echo($formValues[0][2]);
  // echo($formValues[0][3]);
  // echo($formValues[0][4]);
  // echo($formValues[0][5]);
  // echo($formValues[0][6]);
  // echo json_encode($formValues[0]);

  // echo "Sup Bitches!";
  // echo $playerId[0];
  // echo $players[0];
  // echo $position[0];
  // echo $lastName[0];
  // echo $starter[0];
  // echo $playerNumber[0];
  // echo $playerNotes[0];

