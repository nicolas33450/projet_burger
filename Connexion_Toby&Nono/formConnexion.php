<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link rel="stylesheet" href="../front_burger.css">
        
        <title>Connexion a la BDD</title>
        
    </head>
    
    <body>
        <form action="verif.php" method="post">
            <div class="container p-5">
                <div class="row text-center">
                    <div class="col-12">
                        <input class="form-control" type="text" name="user" placeholder="Entrez votre login"/>
                    </div>
                    <div class="col-12 mt-2">
                        <input class="form-control" type="text" name="pw" placeholder="Entrez votre mot de passe"/>
                    </div>
                    <div class="col-12 mt-2">
                        <button class="send btn btn-warning" type="submit" name="send">SEND</button>
                    </div>
                    <div class="col-12 mt-2">
                        <button class="pw btn btn-secondary"><a class="" href="oubli.php">Mot de passe oublié?</a></button>
                    </div>
                </div>
            </div>
        </form>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    </body>
</html>