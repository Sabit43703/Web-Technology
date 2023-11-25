<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forgot Password</title>
	
</head>
<body>

	<?php
	// Set session variables
	$_SESSION["username"] = "";
	$_SESSION["npassword"] = "";
	?>

	<h1>Reset Password</h1>
	<br><br>

 	<form action="../Controller/ForgetpassAction.php" method="POST" novalidate>
		
		<label for="username">Username</label>
		<input type="text" name="username" id="username" required>

		<br><br>

		<label for="usertype">User Type </label>
		<input type="text" name="usertype" id="usertype" required>

		<br><br>

		<label for="Phone">Phone </label>
		<input type="text" name="Phone" id="Phone" required>

		<br><br>

		<label for="npassword">New Password</label>
		<input type="password" name="npassword" id="npassword">
		<br><br>
		<label for="cfpassword">Confirm New Password</label>
		<input type="password" name="cfpassword" id="cfpassword">
		<br><br>

	<?php 

		if (isset($_GET['msg'])) {
			echo $_GET['msg'];
		}
	?>
	<br><br>

		<input type="submit" name="submit" value="submit">
		<br><br>

            	

		
			
	<a href="Login.php">Go Back</a>

	<br><br>
	<?php include('footer.php');?>
	</body>

</html>
