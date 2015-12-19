<?php 
$loggedin = '';
session_start();
 if (!empty($_SESSION['teamName'])) {
 	 $loggedin = true;

} ?>
