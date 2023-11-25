<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	</p>
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
	?>
	<fieldset>
		<br><br><br><br>
		<legend><h1>Registration Form For Employee</h1></legend>		
	<?php 
		
		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{			
			$firstname = test($_POST['firstname']);
			$lastname = test($_POST['lastname']);
			$age = test($_POST['age']);
				
			if (empty($lastname) || empty($firstname) || !isset($_POST['age'])) 
			{
				echo "Fill up the form properly";
				echo "<br><br>";
				$checker = true;
				?>
				<p><b>Registration Failed</b></p>
				<?php								
			}				
			else
			{	
				echo "First Name: " . $firstname;
				echo "<br><br>";				
				echo "Last Name: " . $lastname;
				echo "<br><br>";				 
				echo "Age : " . $age;
				
			}			
		}	
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}
	?>
	<br><br>
	
	<?php 

		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{
			$Address = test($_POST['Address']);
			$Email = test($_POST['Email']);

			if (empty($Address) || empty($Email)) 
			{	
				echo "Fill up the form properly";
				echo "<br><br>";
				
				?>
				<p><b>Registration Failed</b></p>
				<?php
				
			}
			else
			{					
				echo "Address: " . $Address;
				echo "<br><br>";

				if (empty($Phone)) 
				{

				}
				else
				{
					$Phone = test($_POST['Phone']);
					echo "Phone: " . $Phone;
					echo "<br><br>";			
				}
				if(filter_var($Email, FILTER_VALIDATE_EMAIL))
				{	
					echo "Email: " . $Email;
					echo "<br><br>";
				}
				else
				{
					echo "Invalid email Address.";
					echo "<br><br>";
					
				}				
				
			}
		}
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}
	?>

	
<?php 
		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{	
			$username = test($_POST['uname']);	
			if (empty($username) || empty($_POST['password']) )
			{
				echo "Fill up the form properly";
				
				?>
				<p><b>Registration Failed</b></p>
				<?php
				
			}
			else
			{						
				echo "Username: " . $username;
				echo "<br><br>";
					
				if ($_POST['password'] == $_POST['cfpassword'] ) 
				{
					echo "Password Matched";
					echo "<br><br>";
					
				}
				else
				{
					echo "Confirm Password did not match";
				}				
			}	
		}
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}			
			

		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{


		        $handle = fopen("../Model/User.json", "r");
		        $fr = fread($handle, filesize("../Model/User.json")); 
		        $decode = json_decode($fr);
		        fclose($handle);

		        $handle = fopen("../Model/User.json", "w");     


		        if ($decode === NULL)
		        {            
		            $User = array(array("firstname" => $firstname, "lastname" => $lastname, "Age" => $age, "Address" => $Address, "Phone" => $_POST['Phone'], "Email" => $Email,"Username" => $username,"Password" => $_POST['password'], "Confirm_Password" => $_POST['cfpassword']));
		            $User = json_encode($User);
		            fwrite($handle, $User);
		        }
		        else
		        {
		            $decode[] = array("firstname" => $firstname, "lastname" => $lastname, "Age" => $age, "Address" => $Address,"Phone" => $_POST['Phone'], "Email" => $Email,
		            	"Username" => $username,"Password" => $_POST['password'], "Confirm_Password" => $_POST['cfpassword']);
		            $User = json_encode($decode);
		            fwrite($handle, $User);
		        }
		        fclose($handle);
		        echo "Registration ";
		    }
		    
		
		else
		{
			echo " Can not process GET REQUEST METHOD";
		}

        
	?>

	<br><br>
	<a href="../View/Login.php">Log in</a>
	<br><br>
	</fieldset>

	<?php  include('../View/footer.php');?>
</body>
</html>