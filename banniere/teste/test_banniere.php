<?php

 include 'banniere.php';
include 'connexion.php';
include 'banniereManager.php';

 //$c1 = new Banniere();
//$c1->afficheInfos();

$cm = new BanniereManager($pdo);

$c1 = $cm->getList();
print_r($c1);

foreach ($c1 as $indice=> $valeur)
			{
			echo $valeur;
		    }
echo afficheInfos();

//$c1->afficheInfos();

 





?>
