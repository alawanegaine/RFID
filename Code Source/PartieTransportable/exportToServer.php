<?php
/*--------------------------------------------------------------------------------------*/
/*	Author : 																			*/
/*	Role : Export des emargements sur le serveur distant								*/
/*	Parameter :  																		*/
/*	Sortie : Log pour débug																*/
/*--------------------------------------------------------------------------------------*/

	$settings = parse_ini_file("./config/config.ini", TRUE);

	$username = $settings['databaseDest']['user'];
	$password = $settings['databaseDest']['mdp'];
	$hostname = $settings['databaseDest']['host']; 
	$dbname = $settings['databaseDest']['db'];

	// Create connection
	$conn = new mysqli($hostname, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	// requête a executer
	$sql = "SELECT * FROM Module " ;

	// execution de la requete et recupération dans un table ($result)
	$result = $conn->query($sql) ;
	// boucle sur chaque ligne du resultat
	while ($row = $result->fetch_array()) {
		echo "Description : ".$row{'saDescription'}."\n" ;
	}


	//close the connection
	$conn->close();
?>