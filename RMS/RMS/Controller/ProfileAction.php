
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
</head>
<body>




<?php 	
		
	if ($_SERVER['REQUEST_METHOD'] === "POST") {
		
		if (empty($_POST['image']) || empty($_POST['fname'])||empty($_POST['lname'])||empty($_POST['address'])||empty($_POST['div'])||empty($_POST['dis'])) {
			header("Location: ../View/Profile.php?msg=Please fill up the form properly");
		}
		else {
			echo "<h1>View Profile</h1>";
			echo "<br><br>";
			echo "Image: " . $_POST['image'] ;
			echo "<br><br>";
			echo "First Name: " . $_POST['fname'];
			echo "<br><br>";
			echo "Last Name: " . $_POST['lname'];
			echo "<br><br>";
			echo "Address: " . $_POST['address'];
			echo "<br><br>";
			echo "Division: " . $_POST['div'];
			echo "<br><br>";
			echo "District: " . $_POST['dis'];
			echo "<br><br>";

			echo "<br><br>";

			echo "Profile Create Successfully!";
		}	
	}
	else {
		/*echo "Invalid Request";*/

		header("Location: error.html");
	}
?>

	<br><br>
	<a href="../View/Dashboard.php">Log in</a>
	<br><br>

</body>
</html>