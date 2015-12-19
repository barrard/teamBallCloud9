<?php 

$db = new mysqli("localhost", "root", "portland", "TeamBall");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}
$playerId = $_GET['player'];
$sql = "SELECT * FROM playerStats where playerId ='$playerId'";
echo $sql;
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

array_push($shotTotal, $row['0']);
array_push($turnOver, $row['1']);
array_push($rebounds, $row['2']);
array_push($assists, $row['3']);
array_push($playerId, $row['4']);
array_push($id, $row['5']);
array_push($eventCoordsX, $row['6']);
array_push($eventCoordsY, $row['7']);
array_push($shotType, $row['8']);
array_push($shotId, $row['9']);
// echo "<pre>";
// print_r($row);
// echo "<pre>";
}


echo "The shotId is: ";
print_r($shotId);
echo "<br>";
echo "The shotId array is ".count($shotId)." long";
echo "<br>";
echo "The shotType is: ";
print_r($shotType);
echo "<br>";
echo $shotId['0'];
echo "<br>";
// echo $shotId['1'];
// echo "<br>";
// echo $shotId['2'];
// echo "<br>";
// echo $shotId['3'];
// echo "<br>";
// echo $shotId['4'];
// echo "<br>";
$count = count($shotType);
$x=0;
$i=0;
echo"<ul>";
while($x<$count){
	echo"<li>";
	echo"shot #".$x." is a ";
	if($shotType[$x]==1){
		echo"Make ";
		$i=$i+2;
		echo $i;
	}else{
		echo"Miss";
	}
	echo"</li>";
	$x++;
}
echo"</ul>";
echo "<br>";

