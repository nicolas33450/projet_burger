<?php

include 'connexion.php'; 

$id_article = $_GET['id_article'];

$requete = $pdo->prepare('DELETE FROM article WHERE id_article = :id');
$requete -> bindValue(':id', $id_article);

$requete -> execute();

$suppr = 'Votre article a bien été supprimé';

header("Location: ../../articles.php?validation=$suppr");

?>