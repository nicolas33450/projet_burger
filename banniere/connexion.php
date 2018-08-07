<?php

	$hote='localhost';	// Mettre le nom d'hôte fourni par l'hébergeur
	$bdd='projet_burger';	// Mettre le nom de la base de données fourni par l'hébergeur
	$util='root';		// Mettre le nom de l'utilisateur de la base de données fourni par 
					// l'hébergeur
	$mdp='';			// Mettre le mot de passe
try
{
	@$pdo = new PDO('mysql:host=' . $hote . ';dbname=' . $bdd . ';charset=UTF8', $util,$mdp, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch (PDOException $e)
		{
			// Si l'on capture une exception PDO, on en génère une nouvelle Exception
			// avec un message plus approprié et son code d'origine
			throw new Exception('Erreur connexion PDO : ' . utf8_encode($e->getMessage()), $e->getCode());
		}


	
		@$pdo = new PDO('mysql:host=' . $hote . ';dbname=' . $bdd . ';charset=UTF8', $util,$mdp, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

?>
