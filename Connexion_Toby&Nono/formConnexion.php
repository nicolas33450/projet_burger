<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Connexion a la BDD</title>
    </head>



    <body>
        <form action="verif.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <input type="text" name="user" placeholder="Entrez votre login"/>
                    </div>
                    <div class="col-12 mt-2">
                        <input type="text" name="pw" placeholder="Entrez votre mot de passe"/>
                    </div>
                    <div class="col-12 mt-2">
                        <button type="submit" name="send">SEND</button>
                    </div>
                    <duv class="col-12 mt-2">
                        <a href="oubli.php">Mot de passe oublié?</a>
                    </duv>
                </div>
            </div>
        </form>
    </body>
</html>