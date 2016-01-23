<?php if (!empty($_POST['login'])){

    if ($_POST['username']&& $_POST['password']) {
	  $teamName = mysqli_real_escape_string($db, $_POST['username']);
	  $password = mysqli_real_escape_string($db, hash('sha512', $_POST['password']));
	  $user = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM teams WHERE teamName = '$teamName'"));
	    if ($user == '0') {
		  echo('This user doesnt Exist, try making '."<i>$teamName</i>"."<a href='?page=register'>&larr; Back</a>");
	    }
		else if ($user['password'] != $password){
		  echo("Incorrect username password combo <a href='?page=login'>&larr; Back</a>");
	    }else{
		  $_SESSION['teamName'] = $teamName;
		  $sql = "SELECT * FROM teams WHERE teamName = '$teamName'";
		  $rsd = mysqli_query($db, $sql);
		  while ($row = mysqli_fetch_assoc($rsd)) {
	        $_SESSION['teamId']= $row['teamId'];
		  }

	header('Location: http://localhost/ballshotAJAX/');
	 }}}?>


<h1>Login</h1>

<form autocomplete="off" action="" method='post'>
<div class="row">		
	<div class="small-3 columns">

	  <label for="username">Username</label>
	</div>	
	<div class="small-3 columns">
    	<label for="password">Password</label>
	</div>
	<div class="small-3 columns">
	  <label for="login">Register/Login</label>
	</div>
</div>
<div class="row">
	<div class="small-3 columns">
		<input placeholder ='Team Name' type="text" name='username' >
	</div>	
	<div class="small-3 columns">
		<input placeholder='password' type="password" name='password' >
	</div>
	<div class="small-3 columns">
		<input type="submit" name='login' value='login'>
    </div>
</div>






</form>
<br><hr>

<h6>Need an account??<a href="?page=register">Register</a></h6>


