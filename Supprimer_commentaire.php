<?php 
include 'connexion.php';

	$idCom = $_GET['id'];
	$publie = 0;
	//requete préparé en sql
	$requete = $pdo->prepare("update commentaire set publie =:publie where id_commentaire =:id_commentaire");



	$requete->bindValue (':id_commentaire',$idCom);
	$requete->bindValue	(':publie',$publie);


	//on execute la requete (on recupere un jeu d'enregistrement (record set))
	$requete->execute();

	header('location:commentaire.php');
