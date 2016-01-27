<?php 
session_start();
$teamName='';
$password='';
if (!empty($_POST['register'])) {
		if ($_POST['teamName']&&$_POST['password']) {
			global $db;
			$teamName = mysqli_real_escape_string($db, $_POST['teamName']);
			$password = mysqli_real_escape_string($db, hash("sha512", $_POST['password']));
		}else{
			echo "You must enter both a username and password";
		}
		$sql = "SELECT * FROM teams WHERE teamName = '$teamName'";
		$rsd = mysqli_fetch_array(mysqli_query($db, $sql));
		if ($rsd == false) {
			$query = "INSERT INTO teams (teamName, password) VALUES ('$teamName', '$password')";
			mysqli_query($db, $query) or trigger_error(mysqli_error($db)." in ".$query);
			$loggedin = true;
			$_SESSION['teamId'] = mysqli_insert_id($db);
			$_SESSION['teamName']=$teamName;
			header('Location: http://localhost/ballshotAJAX/');
		}else
			// echo $rsd;
			echo("The username <i>'$teamName'</i> already exists '<a href='?page=register'>&larr; Back</a>");
} ?>



<h1>Register</h1>
<form action="" method='post'>
<table>
	<tr>
		<th>TeamName</th>
		<th>Password</th>
		<th>Register</th>
	</tr>
	<tr>
		<td><input value ='teamName' type="text" name='teamName' ></td>
		<td><input value='password' type="password" name='password' ></td>
		<td><input type="submit" name='register' value='Register'></td>
	</tr>
</table>
</form>
<br><hr>

<h6>Need an account??<a href="?page=register">Register</a></h6>


