<?php 

	session_start();	
	if (!isset($_SESSION['username']) )
	{
		?>
		<title>Access Denied</title>
        <br><br>
   
		<h1>Restaurant Management System</h1>
		<br>
	<fieldset>
		<h3>Please login/registration</h3>
		<a href="../View/Login.php"><p>Login Page</p></a>
        <a href="../View/Registration.php"><p>Registration Page</p></a>
    </fieldset>
		<?php
		include('footer.php');

	}
	else
	{
		?>
<!DOCTYPE html>
<html>

	<?php include('../View/Header.php')  ?>

	<title>Dashboard</title>
	<h1>Dashboard</h1>

	<fieldset></fieldset>
	<fieldset>			
		<br>
		<a href="../View/Ordermanagement.php">Order management system</a>
	</fieldset>

	<fieldset>
		<br>
		<a href="../View/Recordpayment.php">Service System</a>
	</fieldset>

	<fieldset>
		<br>	
		<a href="../View/Paymentsystem.php">Payment System</a>	
	</fieldset>

	<fieldset>
		<br>
		<a href="../View/Contactus.php">Contact us</a>	
	</fieldset>

    <fieldset>
		<br>
		<a href="../View/Customerreview.php">Customer Review</a>
	</fieldset>
		<fieldset></fieldset>
		

	<?php include('footer.php') ?>
</html>
<?php
	}

?>
