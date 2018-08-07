<form action="oubli.php" method="get">
	<input type="text" name="login" placeholder="Votre login">
	<input type="submit" name="send">
</form>


<?php
// on appelle toute les fonctions
require 'function.php';

// on rentre dans la boucle seulement si on a déja cliqué sur send
if (isset($_GET['send'])){
	// On récupère les infos envoyé avec send
	$client = $_GET['login'];
	
	// on trouve le client associé
	$client = getClient($client);
	
	// On génère le nouveau mot de pass
	$newmdp = randomPassword();
	
	// On envoi le nouveau mot de passe par mail
    echo $newmdp;
	$test = mail(client['email'],'Changement de mot de passe site Burger', "Votre nouveau mot de passe est $newmdp");
	
	if ($test) {
		header('location: oubli.php?test=true');		
	}
	else {
		header('location: oublie.php?test=false');
	}
	// on crypte le mot de passe
	$newmdp = hash('sha256', $newmdp);
	
	// on envoie le mot de passe dans la BDD
	updateNewMdpSql($newmdp, $client['login']);
	

}

if (isset($_GET['test'])){
	if ($_GET['test']) {
		?>
		<div>
			Votre mot de passe a été changé, pensez a le changer
		</div>
		<?php
	}
	elseif($_GET['test']){
		?>
		<div>
			Echec de la tentative de changement de mot de passe
		</div>
		<?php
	}
}
