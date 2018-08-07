<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Clients</title>
    </head>

    <body>

        <h1 class="text-center">Les rôles</h1>

        <?php

        //require 'connexion.php';
        include 'connexion.php';

        //requête SQL
        $requete = 'SELECT id_role, nom, admin, moderateur FROM role';

        //Exécution de la requête (on récupère un jeu d'enregistrements)
        $resultat = $pdo->query($requete);

        ?>

        <div class="container">
            <div class="row">
                <div class="d-none col-12 d-md-block col-md-3 text-center">
                    ID
                </div>
                <div class="d-none col-12 d-md-block col-md-3 text-center">
                    Nom
                </div>
                <div class="d-none col-12 d-md-block col-md-3 text-center">
                    Admin
                </div>
                <div class="d-none col-12 d-md-block col-md-3 text-center">
                    Modérateur
                </div>
            </div>

            <?php

            while($ligne_tab = $resultat->fetch())
            {

            ?>

            <div class="row border border-dark">
                <div class="col-12 col-md-3"><?= $ligne_tab['id_role'] ?></div>
                <div class="col-12 col-md-3"><?= $ligne_tab['nom'] ?></div>
                <div class="col-12 col-md-3"><?= $ligne_tab['admin'] ?></div>
                <div class="col-12 col-md-3"><?= $ligne_tab['moderateur'] ?></div>
            </div>

            <?php

            }

            ?>

        </div>

        <?php

        //On ferme le jeu d'enregistrements
        $resultat->closeCursor();

        //Déconnexion de la base de données
        unset($pdo);

        ?>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
</html>
