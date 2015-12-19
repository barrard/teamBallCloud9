 <?php
 session_start();
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
    <fieldset class="large-4 columns">
      <legend>Starter</legend>
      <input aria-describedby="starterHelpText" type="radio" name="starter" value="yes" id="starter" required><label for="starter">Yes</label>
      <input type="radio" name="starter" value="no" id="nostart"><label for="nostart">No</label>
    </fieldset>
<p class="help-text" id="starterHelpText">Is this player going to start?</p>
	<div class="column small-6">
		<input class='button' onclick='sendRoster();'name='addplayer'id='addPlayerBtn' value='Add Player'>
	</div>
  </div>
 </form>

 <script>
addPlayerBtn=window.document.getElementById('addPlayerBtn');


    addPlayerBtn.addEventListener('click', sendRoster, false);

 </script>