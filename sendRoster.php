<?php 
include 'connection/session.php';
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

  $teamId = mysqli_real_escape_string($db, $_POST['teamId']);
  $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
  $lastName = mysqli_real_escape_string($db, $_POST['lastName']);
  $playerNumber = mysqli_real_escape_string($db, $_POST['playerNumber']);
  $playerNotes = mysqli_real_escape_string($db, $_POST['playerNotes']);
  $playerPosition = mysqli_real_escape_string($db, $_POST['playerPosition']);
  $starter = mysqli_real_escape_string($db, $_POST['starter']);
  $sql = "INSERT INTO players (teamId, firstName, lastName, playerNumber, playerNotes, playerPosition, starter) VALUES ($teamId, '$firstName', '$lastName', $playerNumber, '$playerNotes', '$playerPosition', '$starter')";
  mysqli_query($db, $sql) or trigger_error(mysqli_error($db)." in ".$sql);
}


