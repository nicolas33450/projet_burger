<?php

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];


        include 'galerie_viz.php';       

        $requete = $pdo->prepare("DELETE * from galerie WHERE id_galerie = :id");

        $requete->bindValue(':id', $id);

        $requete->execute();
    }
