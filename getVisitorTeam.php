<?php 
include 'connection/session.php';
include 'connection/database.php';
$sql ="SELECT * FROM players WHERE teamId = $_SESSION[opponentId]";
$rsd = mysqli_query($db, $sql)or trigger_error(mysqli_error($db)." in ".$sql);
		$playerId=array();
		$players=array();
		$playerNumber=array();
		$starter=array();
		$position=array();
while ($row = mysqli_fetch_array($rsd)) {

		array_push($playerId, $row['0']);
		array_push($players, $row['2']);
		array_push($position, $row['3']);
		array_push($starter, $row['5']);
		array_push($playerNumber, $row['6']);
  } 






	$teamSize = count($players);
	$x = 0;

	while ($x < $teamSize) {
		echo "<li>";
		echo "<a onClick='mainStats(event);'name='".$players[$x]."' id='".$playerId[$x]."'class='button'href='#'>".$players[$x]."</a>";
	    echo "<ul class='menu vertical'>";
	    echo  "<li>
	    <div class='callout moroom'>
	    	<a onClick='getStats(event);'id=".$playerId[$x]." href='#statsModal'><span id=".$playerId[$x]." class='badge playerIcons'>
	    		<i id=".$playerId[$x]." class='fi-power'></i></span></a>
	    	<a onClick='getInfoForm(event)'id=".$playerId[$x]." href='#infoFormModal'><span id=".$playerId[$x]." class='warning badge playerIcons'>
	    		<i id=".$playerId[$x]." class='fi-power'></i></span></a>
	    	<a onClick='deletePlayer(event)'id=".$playerId[$x]." href='#'><span id=".$playerId[$x]." class='alert badge playerIcons'>
	    		<i id=".$playerId[$x]." class='fi-x'></i></span></a>
	    		<br>
	    	Starter: ".$starter[$x]."<br>
	    	playerId: ".$playerId[$x]."<br>
	    	Pos:".$position[$x]."<br>
	    	#: ".$playerNumber[$x]."<br>
	    	 Points: <span id='mainStats'></span> 
	    	</div>
	    	</li>
	      </ul>
	    </li>";

	    $x++;
	}?>


	 <div id="statsModal" class="modalDialog">
		 <div>
		 	
   <?php include 'connection/database.php';
		 global $db;
		 $sql = "SELECT * FROM teams WHERE teamName = '$_SESSION[teamName]'";
		 $rsd = mysqli_query($db, $sql) or trigger_error(mysqli_error($db)." in ".$sql);
		 while($row = mysqli_fetch_assoc($rsd)) { 
			 $teamId=$row['teamId'];
		 } ?>

    <a href="#close" title="Close" class="close">X</a>

		 <input type="text" name='teamId'id='teamIdTag' value="<?php echo $teamId; ?>">

		  	<div id='getStats'></div>

		 </div>
	</div>

	<div id="infoFormModal" class="modalDialog">
	 <div>
    <a href="#close" title="Close" class="close">X</a>
	  <?php
	  include 'connection/database.php';
	 global $db;
	 $sql = "SELECT * FROM teams WHERE teamName = '$_SESSION[teamName]'";
	 $rsd = mysqli_query($db, $sql) or trigger_error(mysqli_error($db)." in ".$sql);
	 while($row = mysqli_fetch_assoc($rsd)) { 
	 $teamId=$row['teamId'];
	  } ?>
	  <form action=""method='post'>

	 <input type="text" name='teamId'id='teamIdTag' value="<?php echo $teamId; ?>">
	  <div class="row">
	     <div class="medium-5 columns">
	       <label>First Name
	         <input type="text" name='firstName'id='firstName'placeholder=".medium-6.columns">
	       </label>
	     </div>
	     <div class="medium-5 columns">
	       <label>Last Name
	         <input type="text" name='lastName'id='lastName'placeholder=".medium-6.columns">
	       </label>
	     </div>
	     <div class="medium-2 columns">
	      <label>
	        Player #
	        <input type="number" name='playerNumber'id='playerNumber'value="100">
	      </label>
	     </div>
	   </div>
	   <div class="row">
	    <div class="columns medium-6">
	      <label>
	         Player Notes
	        <textarea name='playerNotes'id='playerNotes' placeholder="None"></textarea>
	      </label>
	    </div>
	    <div class="columns medium-6">
	      <label>Select Position
	        <select name='playerPosition'id='playerPosition'>
	          <option value="Point Guard">Point Guard</option>
	          <option value="Shooting Guard">Shooting Guard</option>
	          <option value="Small Forward">Small Forward</option>
	          <option value="Power Forward">Power Forward</option>
	          <option value="Center">Center</option>
	        </select>
	      </label>
	    </div>
	   </div>
	   <div class="row">
	   	<div class="small-4 columns">
	     <fieldset>
	       <legend>Starter</legend>
	       <input aria-describedby="starterHelpText" type="radio" name="starter" value="yes" id="starter" required><label for="starter">Yes</label>
	       <input type="radio" name="starter" value="no" id="nostart"><label for="nostart">No</label>
	     </fieldset>
	     </div>
	 <p class="help-text" id="starterHelpText">Is this player going to start?</p>
	 <div class='small-4'>
	 Player Id:<input type="text" id='playerId'>
	 </div>
	  <div class="column small-6">
	    <a href="#close"><input class='button' onclick='updateRoster();'name='addplayer'id='addPlayerBtn' value='Update Player'></a>
	  </form>
	 </div>
	</div>