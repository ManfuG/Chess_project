<?php
	include '__db.connection.php';

	if (isset($_GET['nik'])) {			//isset mi dice se nik è stato messo come input e non è nullo 
		$nickname = $_GET['nik'];

		// SQL query dove conta tutte le righe dove è presente il nikname dato in input 
		$sql = "SELECT COUNT(*) as count FROM giocatori WHERE nik = '$nickname'";
		$result = mysqli_query($db, $sql);

		if ($result) {
			$row = mysqli_fetch_assoc($result);		//Sostituibile con mysqli_num_rows 
			$count = $row['count'];

			// true se il nikname non esiste, altrimenti false 
			echo ($count == 0) ? 'true' : 'false';
		} else {
			// Se la query da errore, allora false 
			echo 'false';
		}

		mysqli_close($db);		//chiudo la connessione al db 
	} else {
		echo 'false';
	}
?>
