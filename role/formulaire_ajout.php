<?php

function afficheForm($nom = '', $admin = '', $moderateur = '')

{

?>

<form action="formulaire_ajout.php" method="post">
    <div class="text-center mt-3">
        Nom : <input type="text" name="nom" value="<?php echo  $nom; ?>" size="30" maxlength="40"/>
    </div>
    <div class="text-center">
        Admin : <input type="textarea" name="admin" value="<?php echo  $admin; ?>" size="30" maxlength="40"/>
    </div>
    <div class="text-center">
        Modérateur : <input type="text" name="moderateur" value="<?php echo  $moderateur; ?>" size="30" maxlength="40"/>
    </div>
    <div class="text-center mt-3">
        <input type="submit" name="valider" value="Valider" />
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
        <title>Ajouter un rôle</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link rel="stylesheet" href="moncss.css">
    </head>

    <body>

        <h1 class="text-center mt-5">Ajouter un rôle</h1>

        <?php
        // On vérifie si la page a reçu le bouton "rechercher" par la méthode POST (==> donc on a validé le formulaire)
        if(isset($_POST['valider']))
        {

            // On récupère les données envoyées par la formulaire (dans des variables)
            $nom=trim($_POST['nom']);
            $admin=trim($_POST['admin']);
            $moderateur=trim($_POST['moderateur']);

            // On ré-affiche le formulaire
            afficheForm($nom, $admin, $moderateur);
            
            if ((!empty($nom)))
            {
                //Connexion à la base de données
                include 'connexion.php';

                $requete = $pdo->prepare("INSERT INTO role(nom, admin, moderateur) VALUES(:nom, :admin, :moderateur)");

                $requete->bindvalue(':nom', $nom, PDO::PARAM_STR);
                $requete->bindvalue(':admin', $admin, PDO::PARAM_INT);
                $requete->bindvalue(':moderateur', $moderateur, PDO::PARAM_INT);

                //On exécute la requête
                $requete->execute();

        ?>

        <div class="col-12 text-center mt-5">Le rôle a été correctement ajouté !</div>

        <?php

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
