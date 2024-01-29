<?php 
	include '__db.connection.php';
	header("Access-Control-Allow-Origin: *");
?>

<html lang= 'en'>
	<head>
		<meta charset='utf-8' />
		<title> Chess for AI learning: Guest </title>
		<meta name='Description' content='Chess' />
		<meta name='Author' content='Giacomo Manfucci' />
		
		<!--Link font di Google fonts-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
		
		<link rel='stylesheet' type='text/css' href='Scacchi_prova_CSS.css'/>			
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="Scacchi_prova_JS.js"></script>	
	</head>
	
	<body>	
	
	<div class="main-content">	
		<nav class='nav-bar'>	
			<h1 id='mainTitle'> Chess web development for didactic purposes</h1>					<!--Titolo programma-->

			<Button id = 'btnLogin'> Register </Button>							<!--Sezione per login o iscrizione-->
			<Button id = 'btnSignIn'> Sign In </Button>
		</nav>
		
		<div class='sub-section'>
			<h2> Play </h2>									<!--Sezione dedicata alla ricerca delle partite-->
		</div>
		
		<div class="grid-container">
			<div class="grid-item"><p class="time">1 + 0</p> <p>Bullet</p></div>
			<div class="grid-item"><p class="time">2 + 1</p> <p>Bullet</p></div>
			<div class="grid-item"><p class="time">3 + 0</p> <p>Blitz</p></div>
			<div class="grid-item"><p class="time">3 + 2</p> <p>Blitz</p></div>
			<div class="grid-item"><p class="time">5 + 0</p> <p>Blitz</p></div>
			<div class="grid-item"><p class="time">5 + 3</p> <p>Blitz</p></div>
			<div class="grid-item"><p class="time">10 + 0</p> <p>Rapid</p></div>
			<div class="grid-item"><p class="time">10 + 5</p> <p>Rapid</p></div>
			<div class="grid-item"><p class="time">30 + 0</p> <p>Classical</p></div>
		</div> 
		
		<div class='sub-section'>
		<h2> History </h2>								 <!--Sezione dedicata allo storico di partite del giocatore -->
		</div>
		
		<div class='sub-section-footer'>						 <!--Qua andranno le linee delle ultime partite, prese dal DB-->
			<p class="footerText"> No games found. Please log in into your account.</p>
		</div>
		
		<footer>	
			<div class='sub-section'>
			<h2> Info </h2>
			</div>
			
			<div id="footer" class='sub-section-footer'>
			<p class="footerText"> Version: 1.0 </p>
			<p class="footerText"> Author: Giacomo Manfucci </p>
			</div>
		</footer>
	</div>
	
	</body>
	
</html>	