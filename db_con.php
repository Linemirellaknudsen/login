<?php session_start();
	// Forbindelse til MySQL server med mysqli metoden

	//1. Konstanter til forbindelsesdata TIL LOCALHOST
	const HOSTNAME = 'linemirellaknudsen.dk.mysql'; 	//Servernavn
	const MYSQLUSER = 'linemirellaknudsen_dk_login'; 	  	// Super bruger (remote har særskilte databaser brugere)
	const MYSQLPASS = 'loginsystem';		// Bruger password
	const MYSQLDB = 'linemirellaknudsen_dk_login';		// Database navn

	// 2. Opretteforbindelsen vi mysqli objekt
	$con = new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);

		// Definere et character-set (utf 8) for forbindelsen
		$con->set_charset('utf8');

?>