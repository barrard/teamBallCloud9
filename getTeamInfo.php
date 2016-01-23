<?php 
include 'connection/session.php';
include 'connection/database.php';
$sql ="SELECT * FROM teams WHERE teamName = '$_GET[teamName]'";
$rsd = mysqli_query($db, $sql)or trigger_error(mysqli_error($db)." in ".$sql);
		// $playerId='';
		// $players='';
		// $playerNumber='';
		// $starter='';
		// $position='';
		// $lastName='';
		// $playerNotes='';
while ($row = mysqli_fetch_array($rsd)) {
$opponentName = $row['teamName'];
$opponentId = $row['teamId'];
		// $playerId= $row['0'];
		// $players= $row['2'];
		// $position= $row['3'];
		// $lastName= $row['4'];
		// $starter= $row['5'];
		// $playerNumber= $row['6'];
		// $playerNotes=$row['7'];
  } 
  echo '<h2><span id="visitorName">'.$opponentName.'</span></h2> Team Id# <h6 id="opponentIdNumber">'.$opponentId.'</h6><br>';
  echo '<h3>Players</h3>';

  $sql ="SELECT * FROM players WHERE teamId = '$opponentId'";
  $rsd = mysqli_query($db, $sql)or trigger_error(mysqli_error($db)." in ".$sql);

echo '<table border="1" cellpadding="3" cellspacing="3"
	<tr>
		<th width="120">First Name. </th>
		<th width="120">Last Name. </th>
		<th width="120">position. </th>
		<th width="100">starter. </th>
		<th width="25">&nbsp; </th>
		<th width="25">&nbsp; </th>
	</tr>';

  while ($row = mysqli_fetch_array($rsd)) {

  	echo '<tr>
  		<td>'.$row["firstName"].'</td>
  		<td>'.$row['lastName'].'</td>
  		<td>'.$row['playerPosition'].'</td>
  		<td>'.$row['starter'].'</td>

  	</tr>';


}

