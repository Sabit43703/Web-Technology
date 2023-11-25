<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>

</head>
<body>
	 <h1>Registration Form For Employee </h1>	
	<form action="../Controller/RegistrationAction.php" method="POST" novalidate>


		<br>
			<label for="fname">First Name:</label>
			<input type="text" name="firstname" id="fname" >
			
			<br><br>

			<label for="lname">Last Name: </label>
			<input type="text" name="lastname" id="lname">

			<br><br>

			<label for="age">Age: </label>
		    <input type="text" name="age" id="age">
			
			<br><br>

			<label for="Address">Address: </label>
			<textarea name="Address" id="Address"></textarea>	

			<br><br>

			<label for="Phone">Phone: </label>
			<input type="tel" name="Phone" id="Phone">

			<br><br>

			<label for="Email">Email: </label>
			<input type="Email" name="Email" id="Email">

			<br><br>

			<label for="uname">Username: </label>
			<input type="text" name="uname" id="uname" required>

			<br><br

			<label for="password">Password: </label>
			<input type="password" name="password" id="password" required>

			<br><br>

			<label for="cfpassword">Confirm Password: </label>
			<input type="password" name="cfpassword" id="cfpassword" required>

			<br><br>
			<input type="submit" name="Register" value="Register">
			

			<br><br>
			<a href="../View/Login.php">Login</a>


	</form>


<?php include('../View/footer.php')  ?>
</html>