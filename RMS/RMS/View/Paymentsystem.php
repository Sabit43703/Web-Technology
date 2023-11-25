<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment System</title>
</head>
<body>
	<form method="post" action="../Controller/PaymentsystemAction.php" novalidate>

	<h1>Payement System</h1>

		<br><br>

		<label for="paymenttype">Payment Type: </label>
		<input type="paymenttype" id="paymenttype">
		<br><br>
		<label for="amount">Amount: </label>
		<input type="amount" name="amount" id="amount" placeholder="Type your amount" required>

		<br><br>
		 <?php 

			if (isset($_GET['msg'])) {
			echo $_GET['msg'];
		}
		?>

		<br><br><br>
			<input type="submit" name="Payment" value="Payment">

			<br><br>


	<?php include('footer.php') ?>

</body>
</html>