<?php 

$db = new mysqli("localhost", "root", "portland", "TeamBall");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}
$teamId = $_GET['teamId'];
$gameId = $_GET['gameId'];
$sql = "SELECT * FROM playerStats where teamId ='$teamId' and gameId='$gameId' order by Id";
//echo $sql;
$rsd = mysqli_query($db, $sql) or trigger_error(mysqli_error($db)." in ".$sql);


$shotType='';
$class='';
$foundIcon='';
$iconColor='';
$eventType=array();
$posXarray=array();
$posYarray=array();
	while ($row = mysqli_fetch_assoc($rsd)) {

		// $playerId = $row['playerId'];
		// $player = $row['player'];
		$shotType = $row['shotType'];
		$time = $row['time'];
		$posX = $row['eventCoordsX'];
		$posY = $row['eventCoordsY'];
		$foundIcon = $row['foundIcon'];
		$iconColor = $row['iconColor'];


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

		array_push($eventType, $shotType);
		array_unshift($posXarray, $posX);
		array_unshift($posYarray, $posY);
	
		echo"<script> shotList.push('".$shotType."');</script>";
		echo"<script> shotLocX.push('".$posX."');</script>";
		echo"<script> shotLocY.push('".$posY."');</script>";
		echo"<script> foundIcon.push('".$foundIcon."');</script>";
		echo"<script> iconColor.push('".$iconColor."');</script>";
		echo"<script> console.log('hellloooo!!!!!');</script>";
	}

		echo"<script> populateCourt(shotList, shotLocX, shotLocY, foundIcon, iconColor);</script>";
