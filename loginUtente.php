<?php 
	include '__db.connection.php';
	
	$validUsername = "user123";
	$validPassword = "pass123";

	$enteredUsername = $_POST["nik"];
	$enteredPassword = $_POST["pswr"];

	if ($enteredUsername === $validUsername && $enteredPassword === $validPassword) {
		echo "Login successful!";
	} else {
		echo "Invalid username or password.";
	}
?>