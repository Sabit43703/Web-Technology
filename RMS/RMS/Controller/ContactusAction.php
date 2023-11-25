<?php 	
		
	if ($_SERVER['REQUEST_METHOD'] === "POST") {
		
		if (empty($_POST['username']) || empty($_POST['subject']) || empty($_POST['content']))
		{
			header("Location: ../View/Contactus.php? msg=Please fill up the form properly");
		}

		else {
			
			echo "Send Successfully!";
		}	
	}
	else {
		/*echo "Invalid Request";*/

		header("Location: error.html");
	}
?>