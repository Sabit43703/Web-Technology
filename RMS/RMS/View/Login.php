<?php
// Start the session
session_start();

if(isset($_SESSION['username']))
{
	header("Location: ../View/Dashboard.php");


}

?>


</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<br><br>
	<h1 style="text-align: center;" >Login</h1>
	<br>

	
	
	
	<form style="text-align: center;"  action="../Controller/LoginAction.php" method="POST" novalidate>

		<label for="username">Username:</label>
		<input type="text" name="username" id="username" required>

		<br><br>
		
		<label for="password">Password:</label>
		<input type="password" name="password" id="password">
		<br><br>
		<input type="submit" value="Login">
		<br>

	<?php 

		if (isset($_GET['msg'])) {
			echo $_GET['msg'];
		}
	?>
		<br>
		<label><a href="Registration.php">Registration</a></label>
		<br><br>
		<label><a href="Forgetpass.php">Forget password!</a></label>
	</form>
	

	<?php include("../View/footer.php")?>

</body>
</html>





	

