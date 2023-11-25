
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


<?php 	
		
	if ($_SERVER['REQUEST_METHOD'] === "POST") {
		
		if (empty($_POST['username']) || empty($_POST['Phone'])||empty('npassword')||empty('cfpassword')) {
			header("Location:../View/Forgetpass.php?msg=Please fill up the form properly");
		}
		else if($_POST['npassword'] == $_POST['cfpassword'] )
		{
			echo "Password Matched";
			echo "<br><br>";
		}	
		else{
			echo "Confirm Password did not match";
		}
		echo "Password change successfully!";
	}
	
	else {
		/*echo "Invalid Request";*/

		header("Location: error.html");
	}


?>
<br><br>

<a href="../View/registration.php">Log in</a>

</body>
</html>