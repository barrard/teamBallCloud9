<?php 

$db = new mysqli("localhost", "root", "portland", "TeamBall");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}
$teamId = $_GET['teamId'];
$gameId = $_GET['gameId'];
$sql = "SELECT * FROM playerStats where teamId ='$teamId' and gameId='$gameId' order by Id DESC";
//echo $sql;
$rsd = mysqli_query($db, $sql) or trigger_error(mysqli_error($db)." in ".$sql);



$output = '';
$shotType = '';
$time = '';
$playerId='';
$class='';

	while ($row = mysqli_fetch_assoc($rsd)) {

		$playerId = $row['playerId'];
		$player = $row['player'];
		$shotType = $row['shotType'];
		$time = $row['time'];
		$posX = $row['eventCoordsX'];
		$posY = $row['eventCoordsY'];


		if($shotType==0){
			$shotType="Miss";
			$class='alert';
		}elseif($shotType==1){
			$shotType="freethrow";
			$class='success';
		}elseif($shotType==2){
			$shotType="Make";
			$class='success';
		}elseif($shotType==3){
			$shotType="Three";
			$class='success';
		}elseif($shotType==4){
			$shotType="blocked-shot";
			$class='primary'; 
		}elseif($shotType==5){
			$shotType="steal";
			$class='alert';
		}elseif($shotType==6){
			$shotType="assist";
			$class='primary';
		}elseif($shotType==7){
			$shotType="rebound";
			$class='primary';
		}elseif($shotType==8){
			$shotType="Turnover";
			$class='secondary';
		}elseif($shotType==9){
			$shotType="Foul";
			$class='secondary';
		}elseif($shotType==10){
			$shotType="Travel";
			$class='alert';
		}else{
			$shotType="Miss";
			$class='Alert';
		}



		$output = "<div class='panel callout eventList ".$class."'>".$shotType."  by  ".$player."  @  ".$time."</div>";
		echo $output;
	}
	//print_r($eventType);
	
	// foreach($eventType as $key => $value){
	// 	echo "<script>shotList.push('".$value."');</script>";
	// }
	// foreach($posXarray as $key => $value){
	// 	echo "<script>shotLocX.push('".$value."');</script>";
	// }
	// foreach($posYarray as $key => $value){
	// 	echo "<script>shotLocY.push('".$value."');</script>";
	// }