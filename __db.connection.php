<?php 	/*Connessione vera e propria al db*/

	session_start();		
	include '__db.inc.php';
	
	$db = mysqli_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PASSWORD) 
		or die ('Unable to connect. Check you connection parameters');
		
	mysqli_select_db($db,MYSQL_DB) or die (mysqli_error($db));
	
?>