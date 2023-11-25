<?php 	
		
	if ($_SERVER['REQUEST_METHOD'] === "POST") {
		
		if (empty($_POST['amount'])){
			header("Location: ../View/Paymentsystem.php? msg=Please fill up the form properly");
		}
		else {
			
			echo "Payment Successfully!";
		}	
	}
	else {
		/*echo "Invalid Request";*/

		header("Location: error.html");
	}
?>