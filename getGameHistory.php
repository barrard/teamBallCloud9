<?php 
include 'connection/session.php';
include 'connection/database.php';
if ((!empty($_GET['homeTeamId'])) &&(!empty($_GET['visitorTeamId']))) {
// $sql ="SELECT * FROM game WHERE homeTeamId=('$_GET[homeTeamId]' or '$_GET[visitorTeamId]' and visitorTeamId='$_GET[homeTeamId]' or '$_GET[visitorTeamId]')";
	$sql ="SELECT * FROM game WHERE 
	(homeTeamId='$_GET[homeTeamId]' OR homeTeamId='$_GET[visitorTeamId]')
	AND 
	(visitorTeamId='$_GET[homeTeamId]' OR visitorTeamId='$_GET[visitorTeamId]') order by id DESC";
// $sql ="SELECT * FROM game WHERE homeTeamId and visitorTeamId ='$_GET[homeTeamId]' xor '$_GET[visitorTeamId]'";
$rsd = mysqli_query($db, $sql)or trigger_error(mysqli_error($db)." in ".$sql);
if (mysqli_num_rows($rsd)==0) {
	echo "<h5>No games played yet between ".$_GET['homeTeamId']." and ".$_GET['visitorTeamId']."</h5>";
}else{
	echo "homeTeamId is ".$_GET['homeTeamId']." and visitorTeamId is ".$_GET['visitorTeamId'];
	echo "<br>";	
?>

<h2>Game History</h2>
<div class="row">
	<div class="column small-12">
<table border="1" cellpadding="3" cellspacing="3">
	<tr>
		<th width="120"><h4>homeTeamName</h4></th>
		<th width="120">visitorTeamName</th>
		<th width="120">visitorTeamId</th>
		<th width="120">homeTeamId</th>
		<th width="120">visitorTeamScore</th>
		<th width="120">homeTeamScore</th>
		<th width="120">date</th>
	</tr>
<?php }
} ?>


<?php 
while ($row = mysqli_fetch_array($rsd)) {

	      $gameId = $row['id'];
    $homeTeamName = $row['homeTeamName'];
 $visitorTeamName = $row['visitorTeamName'];
      $homeTeamId = $row['homeTeamId'];
   $visitorTeamId = $row['visitorTeamId'];
   $homeTeamScore = $row['homeTeamScore'];
$visitorTeamScore = $row['visitorTeamScore'];
            $date = $row['dateString'];	

?>
	 <tr>
	 
	   <?php echo"<td class='relative'><div id='gameBtns'>
	   		<a class='gameBtns' onClick='resumeGame(event);'id=".$gameId." href='#'><span id=".$gameId." class='badge'>
	    		<i id=".$gameId." class='fi-power'></i></span></a>
	    	<a class='gameBtns'onClick='getInfoForm(event)'id=".$gameId." href='#infoFormModal'><span id=".$gameId." class='warning badge'>
	    		<i id=".$gameId." class='fi-power'></i></span></a>
	    	<a class='gameBtns'onClick='deletePlayer(event)'id=".$gameId." href='#'><span id=".$gameId." class='alert badge'>
	    		<i id=".$gameId." class='fi-x'></i></span></a>
	    		</div>"; ?>
	    		<?php echo $homeTeamName; ?></td>
	 	<td class="pad-left"><?php echo $visitorTeamName; ?></td>
	 	<td class="pad-left"><?php echo $visitorTeamId; ?></td>
	 	<td class="pad-left"><?php echo $homeTeamId; ?></td>
	 	<td class="pad-left"><?php echo $visitorTeamScore; ?></td>
	 	<td class="pad-left"><?php echo $homeTeamScore; ?></td>
	 	<td class="pad-left"><?php echo $date; ?></td>
	 </tr>

<?php
}
?>

</table>
	</div>
</div>