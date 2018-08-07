<?php
require 'function.php';

$user = $_POST['user'];
$pw = $_POST['pw'];

$res = getClient($user,$pw);
$encryptedpw = hash('sha256', $pw);

if($encryptedpw == $res['mdp']){ //
	echo "Connexion en cours";
	
	// Si le login et le mot de passe correspondent à un utilisateur
	session_start();// on démarre une session
	
	// on met dans la variable client de la session les infos du client provenant de la table utilisateur
	$_SESSION['logUser']=$res['user'];
	
	// on redirige
	header('location: index.php');
}
else{
	echo "Données d'identification invalides";
	echo "<div><a href='formConnexion.php'>Retour sur le formulaire de connexion</a> </div>";
}