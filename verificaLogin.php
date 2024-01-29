<?php 
	include '__db.connection.php';
	
	$query = ' SELECT INTO giocatori (nik, pswr) 
			VALUES
			("'.$_GET['nik'].'","'.$_GET['pswr'].'")';
			
			
	$result = mysqli_query($db,$query) or die (mysqli_error($db));
?>