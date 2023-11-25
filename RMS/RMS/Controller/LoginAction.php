<?php 
	
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>

	<?php

		function test($data)	
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}		
	
		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{

			$username = test($_POST['username']);
			$password = test($_POST['password']);

			if (empty($username) || empty($password)) 
			{
					echo "Fill up the form properly";
					echo "<br><br>";
					echo "Go back to Login Page and Try again with valid username or password";
					?>
					<br><br>
					<a href="../View/Login.php">Login Page</a>
					<br>
					<?php
					include('../View/footer.php');

			}
			else
			{			

				$handle = fopen("../Model/User.json", "r");
				$fr = fread($handle, filesize("../Model/User.json"));
				$arr1 = json_decode($fr);	
					

				for ($i=0; $i < count($arr1) ; $i++) 
				{ 
					if(($username == $arr1[$i]->Username) && $password == $arr1[$i]->Password)			
					{
						$_SESSION['username'] = $username;
						header("Location: ../View/Dashboard.php");
					}
					else
					{ 
						$_SESSION['error_message'] = "Login Failed!";
						header("Location: ../View/Login.php");
					}
				}		
			}
		}
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}
	?>
</body>
</html>