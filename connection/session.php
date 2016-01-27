<?php 
session_start();
$loggedin = '';
$startGame = '';

 if (!empty($_SESSION['teamName'])) {
 	 $loggedin = true;

} else {
	$loggedin = false;
}
 if (!empty($_SESSION['opponentName'])) {
 	 $startGame = true;

} else {
	$startGame = false;
}?>
