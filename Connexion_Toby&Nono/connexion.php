<?php

	$hote='localhost';	// Mettre le nom d'hôte fourni par l'hébergeur
	$bdd='ifpa_dev';	// Mettre le nom de la base de données fourni par l'hébergeur
	$util='root';		// Mettre le nom de l'utilisateur de la base de données fourni par 
					// l'hébergeur
	$mdp='';			// Mettre le mot de passe

	try
	{
		@$pdo = new PDO('mysql:host=' . $hote . ';dbname=' .$bdd,$util,$mdp);
		// On définit le codage en utf8
		$pdo->exec("set character set utf8");
		
	}
	catch (PDOException $e)
	{
		echo 'La connexion a échouée : ' . utf8_encode($e->getMessage());
		exit(1);
	}
?>
