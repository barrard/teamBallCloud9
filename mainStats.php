<?php 

include('connection/database.php');

$playerId = $_GET['player'];
$gameId = $_GET['gameId'];
$sql = "SELECT * FROM playerStats where playerId ='$playerId' and gameId='$gameId'";
//echo $sql;
$rsd = mysqli_query($db, $sql) or trigger_error(mysqli_error($db)." in ".$sql);
$shotTotal = array();
$turnOver = array();
$rebounds = array();
$assists = array();
$playerId = array();
$id = array();
$eventCoordsX = array();
$eventCoordsY = array();
$shotType = array();
$shotId = array();
while($row = mysqli_fetch_array($rsd)){

array_push($playerId, $row['0']);
array_push($id, $row['1']);
array_push($eventCoordsX, $row['2']);
array_push($eventCoordsY, $row['3']);
array_push($shotType, $row['4']);
array_push($shotId, $row['5']);
// echo "<pre>";
// print_r($row);
// echo "<pre>";
}

$count = count($shotType);
$x=0;
$points=0;
while($x<$count){
	if($shotType[$x]==2){
		$points=$points+2;
	}else{
	}
	$x++;
}
if ($points < 10) {
	$points = '0'.$points;
}
echo($points);

