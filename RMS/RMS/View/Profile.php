
<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile Page</title>
</head>
<body>

	<?php
	// Set session variables
	$_SESSION["image"] = "";
	$_SESSION["fname"] = "";
	$_SESSION["lname"] = "";
	$_SESSION["address"] = "";
	$_SESSION["div"] = "";
	$_SESSION["dis"] = "";
	?>
	<form method="POST" action="../Controller/ProfileAction.php" novalidate>

	<h2> Profile </h2>

		<label for="image">Select Image: </label>
		<input type="File" name="image" id="image" accept="image"> <br> <br>

		<label for="fname">First Name: </label>
		<input type="text" name="fname" id="fname"> <br> <br>

		<label for="lname">	Last Name: </label>
		<input type="text" name="lname" id="lname"> <br> <br>


		<label>	Address: </label>
		<address>
		<input type="text" name="address"> 
		</address> <br> <br>

		<label>	Division: </label>

		<select  name="div" id="div">
		<option value="Dhaka"> Dhaka</option>
		<option value="Rajshahi"> Rajshahi</option>
		<option value="Sylhet"> Sylhet</option>	
		<option value="Chittagong"> Chittagong</option>
		<option value="Barisal"> Barisal</option>
	    </select>
	    <br> <br>

	    <label>	Distric: </label>

		<select  name="dis" id="dis">
		<option value="Dhaka"> Dhaka</option>
		<option value="Chapai"> Chapai</option>
		<option value="Habiganj"> Habiganj</option>	
		<option value="Chadpur"> Chittagong</option>
		<option value="Patuakhali"> Barisal</option>
	    </select>
	    <br> <br>

	    <?php 

			if (isset($_GET['msg'])) {
			echo $_GET['msg'];
		}
	?>

		<br><br>
	    <input type="submit" value="submit">
	    </form>




	<?php include('footer.php') ?>
	
</body>
</html>