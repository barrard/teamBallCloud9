<?php
$db = new mysqli("localhost", "root", "portland", "TeamBall");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}
// echo $mysqli->host_info . "\n";

$db = new mysqli("127.0.0.1", "root", "portland", "TeamBall", 3306);
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}

// echo $mysqli->host_info . "\n";
?>

