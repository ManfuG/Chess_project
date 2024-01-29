/*Quando il documento è pronto-*/
$(document).ready(function(){									

/*GESTIONE REGISTRAZIONI UTENTI ##############################################################################################*/

	/*Se cliccato il bottone Register, avviene il passaggio all'altra pagina HTML, quella della registrazione. */
	$("#btnLogin").click(function(){							
		location.href = "scacchiRegistrazione.php";
	});

	/*Funzione di controllo della registrazione */
	function controlReg(mail, pswr, confPass){
		
		const emailRegex = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
		
		return !(emailRegex.test(mail) && pswr === confPass);
	}
	
	/* Funzione per verificare se il nickname è unico */
	function isNicknameUnique(nik) {
		return new Promise(function(resolve, reject) {		//Questa funzione mi assicura di gestire se l'operazione asincrona della chiamata ajax va a buon fine 
		$.ajax({
			type: "GET",
			url: "checkUniqueNickname.php",
			data: { nik: nik },					//Diversa scrittura per i dati rispetto a: "nik=" + nik
			success: function(result) {				//Se la chiamata ha successo, allora il risultato lo imposto a true 
				resolve(result === 'true');
			},
			error: function(xhr, status, error) {		//Se la chiamata non ha successo, allora mi mando in console l'errore e imposto a false il risultato
				console.error("AJAX Error:", status, error);	
				reject(false);
			}
		});
		});
	}
	
	/*Inserimento dati utenti nel db, tabella Giocatori*/
	$('#input-submit').click(function () {
		var mail = $('#input1').val();			//Prendo i valori in input dell'utente 
		var nik = $('#input2').val();
		var pswr = $('#input3').val();
		var confpswr = $('#input4').val();

		if (controlReg(mail, pswr, confpswr)) {				//Faccio il controllo sull'email se è valida 
			alert("ERRORE. Dati di registrazione non validi.");
		} else {

			// Controlla se il nome è unico nel db, e fa una delle due funzioni in base allo stato della promise 
			isNicknameUnique(nik)						//Mi manda il risultato della query come argomento della funzione nel then o nel catch in base al risultato 
			
			.then(function (isUnique) {					//Se la Promise che ho fatto prima della chiamata ajax è resolved allora inserisco oppure no il nik 
				console.log("isUnique:", isUnique);

				if (isUnique) {							//Se dunque il nome è unico, allora inserisco nel db 
					// Mi inserisce l'utente se il nome è unico 
					$.ajax({
						type: "GET",
						url: "insertUtente.php",
						data: "mail=" + mail + "&nik=" + nik + "&pswr=" + pswr,
						crossDomain: true,
						success: function (result) {
							//sessionStorage.setItem('nikname', nik);
							location.href = "ScacchiMain.php"
						}
					});
				} else {								//Altrimenti do un Alert d'errore 
					alert("ERRORE. Il nickname non è unico. Scegli un altro nickname.");
				}
			})
					
			.catch(function (error) {					//Se la promise è rejected, allora mostro in console che tipo di errore è
				console.error("Promise error:", error);
			});

		}
	});
	
/*GESTIONE LOGIN UTENTI ##########################################################################################################*/
	
	/*Se cliccato il bottone Sign In , avviene il passaggio all'altra pagina HTML, quella del login. */
	/*$("#btnSignIn").click(function(){							
		location.href = "scacchiLogin.php";
	});
	
	function validateLogin() {
		var username = document.getElementById("input2").value;
		var password = document.getElementById("input3").value;

		$.ajax({
			type: "POST",
			url: "loginUtente.php",
			data: {
				nik: username,
				pswr: password
			},
			success: function (response) {
				location.href = "ScacchiMain.php";
			}
		});
	}*/
	
	
	
});