<?php
session_start(); 

echo "Logout successfully";
session_destroy();
header("Location: Login.php");


?>