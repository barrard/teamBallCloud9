<?php 
// include 'connection/session.php';
include 'connection/database.php'; 
global $db;
if (!empty($_POST['playerId'])) {
  $teamId='';
  $firstName='';
  $lastName='';
  $playerNumber='';
  $playerNotes='';
  $playerPosition='';
  $starter='';

  $playerId = mysqli_real_escape_string($db, $_POST['playerId']);
  $teamId = mysqli_real_escape_string($db, $_POST['teamId']);
  $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
  $lastName = mysqli_real_escape_string($db, $_POST['lastName']);
  $playerNumber = mysqli_real_escape_string($db, $_POST['playerNumber']);
  $playerNotes = mysqli_real_escape_string($db, $_POST['playerNotes']);
  $playerPosition = mysqli_real_escape_string($db, $_POST['playerPosition']);
  $starter = mysqli_real_escape_string($db, $_POST['starter']);
  $sql = "UPDATE players SET teamId='".$teamId."', firstName='".$firstName."', lastName='".$lastName."', playerNumber='".$playerNumber."', playerNotes='".$playerNotes."', playerPosition='".$playerPosition."', starter='".$starter."' WHERE playerId='".$playerId."'";
  mysqli_query($db, $sql) or trigger_error(mysqli_error($db)." in ".$sql);
}
echo "echo from updateRoster.php";


