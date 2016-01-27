<?php 

include('connection/database.php');

$playerId = $_GET['player'];
$gameId = $_GET['gameId'];
$sql = "SELECT * FROM playerStats where playerId ='$playerId' and gameId = '$gameId'";
//echo $sql;
$rsd = mysqli_query($db, $sql) or trigger_error(mysqli_error($db)." in ".$sql);
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


// echo "The shotId is: ";
// print_r($shotId);
echo "<br>";
echo "The shotId (Event Id) array is ".count($shotId)." long";
if (count($shotId) != 0){
	// echo "<br>";
	// echo "The shotType is: ";
	// print_r($shotType);
	echo "<br>";
	echo 'shotId: '.$shotId['0'];
	echo "<br>";
	$count = count($shotType);
	//counter
	$x=0;
	//points
	$i=0;
	//turnovers
	$t=0;
	//posession change counter
	$PC=0;
	echo"<ul>";
	while($x<$count){
		echo"<li>";
		echo"shot #".$x." is a ";
		if($shotType[$x]==0){
			echo"Miss ";
			echo "Points = ".$i."<br>";
		}elseif($shotType[$x]==1){
			echo"freethrow ";
			$i=$i+1;
			echo "Points = ".$i."<br>";
		}elseif($shotType[$x]==2){
			echo"Make ";
			$i=$i+2;
			echo "Points = ".$i."<br>";
		}elseif($shotType[$x]==3){
			echo"Three ";
			$i=$i+3;
			echo "Points = ".$i."<br>";
		}elseif($shotType[$x]==4){
			echo"blocked shot "; 
			$t=$t+1;
			echo "Total Turnovers = ".$t."<br>";
		}elseif($shotType[$x]==5){
			echo"steal ";
			$t=$t+1;
			echo "Total Turnovers = ".$t."<br>";
		}elseif($shotType[$x]==6){
			echo"assist ";
		}elseif($shotType[$x]==7){
			echo"rebound ";
			$PC=$PC+1;
			echo "Total posession changes = ".$PC;

		}elseif($shotType[$x]==8){
			echo"Turnover just happened ";
			$t=$t+1;
			echo "Total Turnovers = ".$t."<br>";
			$PC=$PC+1;
			echo "Total posession changes = ".$PC;
		}elseif($shotType[$x]==9){
			echo"Foul Violation ";
			$t=$t+1;
			echo "Total Turnovers = ".$t."<br>";
		}elseif($shotType[$x]==10){
			echo"Travel violation ";
			$t=$t+1;
			echo "Total Turnovers = ".$t."<br>";
			$PC=$PC+1;
			echo "Total posession changes = ".$PC;
		}else{
			echo"Miss";
		}
		echo"</li>";
		$x++;
	}
	echo"</ul>";
	echo "<br>";

	echo $i;
}else{
	echo "This player has no stats";
}

