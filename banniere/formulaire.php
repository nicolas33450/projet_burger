<?php

function afficheForm( $a = '', $p = '')

{

?>

<form action="formulaire.php" method="post">
    
    <div class="text-center">
        id_article : <input type="textarea" name="article" value="<?php echo  $a; ?>" size="30" maxlength="40"/>
    </div>
    <div class="text-center">
        Position : <input type="text" name="position" value="<?php echo  $p; ?>" size="30" maxlength="40"/>
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
        <title>Ajouter une bannière</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link rel="stylesheet" href="moncss.css">
    </head>

    <body>

        <h1 class="text-center mt-5">Ajouter une bannière</h1>

        <?php
        // On vérifie si la page a reçu le bouton "rechercher" par la méthode POST (==> donc on a validé le formulaire)
        if(isset($_POST['valider']))
        {

            // On récupère les données envoyées par la formulaire (dans des variables)
           
            $article=trim($_POST['article']);
            $position=trim($_POST['position']);
           

            // On ré-affiche le formulaire
            afficheForm( $article, $position);

            if ( (!empty($article)) && (!empty($position)) )
            {

                //Connexion à la base de données
                include 'connexion.php';

                $requete = $pdo->prepare("INSERT INTO banniere ( id_article, position) VALUES( :article, :position)");

               
                $requete->bindvalue(':article', $article);
                $requete->bindvalue(':position', $position);
                

                //On exécute la requête
                $requete->execute();

        ?>

        <div class="col-12 text-center mt-5">La bannière a été correctement ajouté !</div>

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
