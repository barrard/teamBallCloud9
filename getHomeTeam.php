<?php 
include 'connection/session.php';
include 'connection/database.php';
$sql ="SELECT * FROM players WHERE teamId = $_SESSION[teamId]";
$rsd = mysqli_query($db, $sql);
		$playerId=array();
		$players=array();
		$playerNumber=array();
		$starter=array();
		$position=array();

		// $madeShots=array();
		// $rebounds=array();
		// $fouls=array();
while ($row = mysqli_fetch_array($rsd)) {
		// $players[]=$row;
		// echo $players[0]['firstName'];
		// print_r($players);
		// print_r($row);
		// echo $players[2]['firstName'];
		// echo $players[3]['firstName'];
		// $name=$row['firstName'];
		array_push($playerId, $row['0']);
		array_push($players, $row['2']);
		array_push($position, $row['3']);
		array_push($starter, $row['5']);
		array_push($playerNumber, $row['6']);
		// array_push($madeShots, $row['10']);
		// array_push($rebounds, $row['11']);
		// array_push($fouls, $row['12']);


  } 
 //  echo "<pre>";
	// echo "Players: ". print_r($players);
	// echo "totalShots: ". print_r($totalShots);
	// echo "missedShots: ". print_r($missedShots);
	// echo "madeShots: ". print_r($madeShots);
	// echo "rebounds: ". print_r($rebounds);
	// echo "fouls: ". print_r($fouls);
	//  echo "</pre>";
	// echo(count($players));
	// echo(count($totalShots));
	// echo(count($missedShots));
	$teamSize = count($players);
	$x = 0;

	while ($x < $teamSize) {
		echo "<li>";
		echo "<a onClick='showStats();' id='".$playerId[$x]."'class='button'href='#'>".$players[$x]."</a>";
	    echo "<ul class='menu vertical'>";
	    echo  "<li><div class='callout moroom'><span class='alert badge playerIcons'><i class='fi-power'></i></span><br>Starter: ".$starter[$x]."<br>Pos:".$position[$x]."<br>#: ".$playerNumber[$x]."</div></li>
	      </ul>
	    </li>";

	    $x++;
	}?>
