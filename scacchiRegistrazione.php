<?php 
	include '__db.connection.php';

?>
<html lang= 'en'>
	<head>
		<meta charset='utf-8' />
		<title> Chess for AI learning: Registration</title>
		<meta name='Description' content='Chess' />
		<meta name='Author' content='Giacomo Manfucci' />
		
		<!--Link font di Google fonts-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
		
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="Scacchi_prova_JS.js"> </script>
		<link rel='stylesheet' type='text/css' href='Scacchi_prova_CSS.css'/>		

	</head>
	
	<body>
	
	<div class="main-content">	
	
		<nav class='nav-bar'>	
			<h1 id='mainTitle'> Chess web development for didactic purposes</h1>					<!--Titolo programma-->
		</nav>
		
		<div class='regBlock'>
		
			<p class="regInput"> Inserire mail </p>
			<input placeholder="Enter email address" class="input" id="input1" />
			
			<p class="regInput"> Inserire nikname </p>
			<input placeholder="Enter nikname" class="input" id="input2"  />
			
			<p class="regInput"> Inserire password </p>
			<input placeholder="Enter password" class="input" id="input3" />
			
			<p class="regInput"> Confermare password </p>
			<input placeholder="Confirm password" class="input" id="input4" />
			
			<div class="regButton"> <button id="input-submit"> Conferma </button> </div>
			
		</div>
	</div>
	
	</body>
	
</html>