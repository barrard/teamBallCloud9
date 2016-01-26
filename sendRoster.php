<?php 
// include 'connection/session.php';
include 'connection/database.php'; 
global $db;
if (!empty($_POST['teamId'])) {
  $teamId='';
  $firstName='';
  $lastName='';
  $playerNumber='';
  $playerNotes='';
  $playerPosition='';
  $starter='';
  $cacheControl='';

  $teamId = mysqli_real_escape_string($db, $_POST['teamId']);
  $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
  $lastName = mysqli_real_escape_string($db, $_POST['lastName']);
  $playerNumber = mysqli_real_escape_string($db, $_POST['playerNumber']);
  $playerNotes = mysqli_real_escape_string($db, $_POST['playerNotes']);
  $playerPosition = mysqli_real_escape_string($db, $_POST['playerPosition']);
  $starter = mysqli_real_escape_string($db, $_POST['starter']);
  $cacheControl = mysqli_real_escape_string($db, $_POST['cacheControl']);
  $sql = "INSERT INTO players (teamId, firstName, lastName, playerNumber, playerNotes, playerPosition, starter, cacheControl) VALUES ($teamId, '$firstName', '$lastName', $playerNumber, '$playerNotes', '$playerPosition', '$starter', '$cacheControl')";
  mysqli_query($db, $sql) or trigger_error(mysqli_error($db)." in ".$sql);
}
echo "echo from sendRoster.php";


