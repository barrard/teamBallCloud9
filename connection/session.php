<?php 
 $_SESSION['teamName'] = '';
$loggedin = '';
$startGame = '';
session_start();
 if (!empty($_SESSION['teamName'])) {
 	 $loggedin = true;

} 
 if (!empty($_SESSION['opponentName'])) {
 	 $startGame = true;

} ?>
