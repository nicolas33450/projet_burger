<?php

function afficheForm($nom = '')
    
{
    
?>

<form action="rechercher_role.php" method="post">
    <div class="text-center">
        Nom : <input type="text" name="nom" value="<?php echo  $nom; ?>" size="30" maxlength="40"/>
    </div>
    <div class="text-center mt-3">
        <input type="submit" name="rechercher" value="Rechercher" />
    </div>
    <div class="text-center mt-3">
        <a href="formulaire_ajout.php"><input type="button" name="ajouter" value="Ajouter" /></a>
    </div>
</form>

<?php
 
}

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Les rôles</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link rel="stylesheet" href="moncss.css">
    </head>

    <body>

        <h1 class="text-center mt-5">Rechercher rôle</h1>

        <?php
        // On vérifie si la page a reçu le bouton "rechercher" par la méthode POST (==> donc on a validé le formulaire)
        if(isset($_POST['rechercher']))

        {

            // On récupère les données envoyées par la formulaire (dans des variables)
            $nom=trim($_POST['nom']);

            // On ré-affiche le formulaire
            afficheForm($nom);

            if ((empty($nom)))
            {
                $nom = $nom . '%';
                
                //Connexion à la base de données
                require 'connexion.php';

                $requete = $pdo->prepare("SELECT id_role, nom, admin, moderateur FROM role WHERE nom like :nom");

                $requete->bindValue(':nom', $nom);

                //On exécute la requête
                $requete->execute();

                $nbLigne = $requete->rowCount();

                if ($nbLigne == 0)
                {
                    echo '<div class="text-center mt-5">Il n\'y a aucun résultat pour cette recherche.</div>';
                }

                else
                {

        ?>

        <div class="container mt-5">
            <div class="row">
                <div class="d-none col-12 d-md-block col-md-2">ID</div>
                <div class="d-none col-12 d-md-block col-md-2">Nom</div>
                <div class="d-none col-12 d-md-block col-md-2">Admin</div>
                <div class="d-none col-12 d-md-block col-md-2">Modérateur</div>
            </div>

            <?php

                    while($ligne_tab = $requete->fetch())
                    {

            ?>

            <div class="row border border-info">
                <div class="col-12 col-md-2"><?= $ligne_tab['id_role'] ?></div>
                <div class="col-12 col-md-2"><?= $ligne_tab['nom'] ?></div>
                <div class="col-12 col-md-2"><?= $ligne_tab['admin'] ?></div>
                <div class="col-12 col-md-2"><?= $ligne_tab['moderateur'] ?></div>
                <div class="col-12 col-md-2 text-center"><a href="formulaire_modif.php?id_role=<?= $ligne_tab['id_role'] ?>"><img src="img/crayon.jpg"/></a></div>
            </div>

            <?php

                    }

                    // On vide le jeu d'enregistrements
                    $requete->closeCursor();

                    // Déconnexion de la base de données
                    unset($pdo);		

            ?>

        </div>

        <?php

                }

            }

        }

        else
        {

            afficheForm();

        }

        ?>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    </body>
</html>
