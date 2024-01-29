<?php
include '__db.connection.php';

if (isset($_GET['mail']) && isset($_GET['nik']) && isset($_GET['pswr'])) {
    
    $mail = $_GET['mail'];
    $nik = $_GET['nik'];
    $pswr = $_GET['pswr'];
    $hash = password_hash($pswr, PASSWORD_DEFAULT);
    
    $_SESSION['nikname'] = $nik;

    // Simple query to insert user
    $sql = "INSERT INTO giocatori (nik, mail, pswr) VALUES ('$nik', '$mail', '$hash')";
    
    $result = mysqli_query($db,$sql) or die (mysqli_error($db));
}   
?>

<?php 
/*	include '__db.connection.php';
	HASHBYTES('MD5', '$pswr')
	
	$query = ' INSERT INTO giocatori (nik, mail, pswr) 
			VALUES
			("'.$_GET['nik'].'","'.$_GET['mail'].'","'.PASSWORD($_GET['pswr']).'")';
	
	$result = mysqli_query($db,$query) or die (mysqli_error($db));
*/
?>


