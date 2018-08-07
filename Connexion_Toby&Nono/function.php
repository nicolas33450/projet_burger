<?php

function getClient($user='') {
    require 'connexion.php';
    $requete = $pdo->prepare('SELECT * FROM utilisateur WHERE login = :log');
    $requete->bindValue(':log', $user);
    $requete->execute();
    // dans res il a tous les resultat de la requete
    // il faut convertir le record set en tableau
    $resultat = $requete->fetch(PDO::FETCH_ASSOC);
    // maintenant dans $resultat on à le client reconnu par le send du loggin
    return $resultat;
}

function updateNewMdpSql($arg, $newlog) {
    require 'connexion.php';
    $requete = $pdo->prepare('UPDATE utilisateur SET mdp = :newmdp WHERE login = :user');
    $requete->bindValue(':newmdp', $arg);
    $requete->bindValue(':user', $newlog);
    $requete->execute();
}

function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, strlen($alphabet)-1);
        $pass[$i] = $alphabet[$n];
    }
    $pass = implode($pass);
    return $pass;
}

function addPub($client,$site,$pub) {
    require 'connexion.php';
    $requete = $pdo->prepare('INSERT INTO pub (lien_photo,client,lien) VALUES (:pub,:client,:site)');
    $requete->bindValue(':client', $client);
    $requete->bindValue(':site', $site);
    $requete->bindValue(':pub', $pub);
    $requete->execute();
}