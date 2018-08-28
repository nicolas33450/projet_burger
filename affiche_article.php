<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link rel="stylesheet" href="front_burger.css">
        <title></title>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="titre  text-center"> A'BURGER'TICLE</h1>
                </div>

                <div class="col-12">
                    <img class="w-100" src="images/hja8FO0.png" alt="trait">
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <a href="front_burger.php" class="navbar-brand" ><img class="w-25" src="images/burger.png" alt=""></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <?php 
                    require 'connexion.php';
                    $requete = $pdo->prepare('select nom, id_categorie from categorie where parent is null');
                    $requete->execute();
                    while($ligne_tab = $requete->fetch())
                    {

                    ?>
                    <li class="dropdown ">
                        <a class="nav-link dropdown-toggle ml-5" href="#" id="navbarDropdown"  data-toggle="dropdown"><?= $ligne_tab['nom']?></a>
                        <div class="dropdown-menu" >
                            <?php

                            ?>

                            <?php                    
                        $requete2 = $pdo->prepare('select nom, id_categorie from categorie where parent = :id_cat');
                        $requete2->bindValue(':id_cat',$ligne_tab['id_categorie']);
                        $requete2->execute();                   

                        while($ligne_tab2 = $requete2->fetch())
                        {
                            ?>

                            <a class="dropdown-item" href="affiche_article.php"><?= $ligne_tab2['nom']?></a>

                            <?php
                        }
                            ?>
                        </div>
                    </li>
                    <?php

                    }
                    ?>
                </ul>
                <form action="" class="form-inline my-2 my-lg-0">
                    <a href="./Connexion_Toby&Nono/formConnexion.php">
                        <button class="btn btn-outline-info my-2 my-sm-0 mr-3" type="button">connexion</button></a>
             
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        
        <?php   
        $id=$_GET['id'];
        $requete = $pdo->prepare('select nom from categorie where id_categorie =:id_cat');
        $requete->bindValue(':id_cat',$id);
        $requete->execute();
       
        while($ligne_tab = $requete->fetch())
        {
        ?>
         <div class="row">
             <div class="col-12 text-center">
                 <a href=""><?= $ligne_tab['nom'] ?></a>
             </div>
             
         </div>
        
        <?php
        }
        ?>
        
        <?php
        $id=$_GET['id'];
        $requete = $pdo->prepare('select titre, id_categorie from ')
        $requete->bindVAlue(''),
        $requete->execute();
        
        ?>
   
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    </body>
</html>
