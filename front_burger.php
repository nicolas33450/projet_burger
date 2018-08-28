<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link rel="stylesheet" href="front_burger.css">
        <title> Front burger </title>
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

            <a class="navbar-brand" ><img class="w-25" src="images/burger.png" alt=""></a>

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

                            <a class="dropdown-item" href="affiche_article.php?&id=<?= $ligne_tab2['id_categorie']?>"><?= $ligne_tab2['nom']?></a>

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

        $requete = $pdo->prepare("select lien from galerie where photo = 'banniere' ");     
        $requete->execute();        
        $photo_tab = $requete->fetch();      
        ?>
        <div class="">
            <img class="w-100" src="<?=($photo_tab['lien'])?>" alt="slide">            
        </div>


        <div class="container-fluid">
            <div class="row ">
                <div class="col-9">
                    <div class="section1 mt-3">
                        <h3> a'buerger'ticle kesako</h3>
                        <p>admodum quis est mentitum laboris varias admodum de excepteur fugiat id ne 
                            exquisitaque ne philosophari quamquam occaecat proident o si ut aute fabulas id 
                            aute quis multos magna deserunt nulla ullamco hic tempor quae commodo 
                            illustriora ne officia officia culpa philosophari hic cupidatat ipsum 
                            imitarentur transferrem hic exquisitaque admodum nostrud quo summis nam ab 
                            labore culpa quamquam despicationes coniunctione nostrud</p>
                    </div>

                    <div class="row mb-5">

                        <?php                         
    $requete = $pdo->prepare('select titre, contenu,photo from article');
                 $requete->execute();
                 while($ligne_tab = $requete->fetch())
                 {

                        ?>

                        <div class="col-12 col-md-4 mt-5 pl-5">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="<?=('./images/'. $ligne_tab['photo'])?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $ligne_tab['titre']?> </h5>
                                    <p class="card-text"><?= $ligne_tab['contenu']?></p>
                                    <a href="#" class="btn btn-primary">LIRE</a>
                                </div>
                            </div>
                        </div>

                        <?php
                 }
                        ?>

                    </div>
                </div>
                <div class="col-12 col-md-3 four section2 mt-5 mb-5">
                    <h2 class=" text-center"> les burgers viennent de sortir du four</h2><br/>

                    <h4> phrase accroche dernier art</h4>
                    <p>officia quo nescius imitarentur anim ingeniis sempiternum e quibusdam elit aute 
                        laborum senserit iis do anim tamen enim quid singulis o te malis lorem 
                        praetermissum cernantur proident hic voluptatibus incididunt non eiusmod quid 
                        quae minim hic voluptatibus adipisicing comprehenderit non distinguantur sed 
                        pariatur ita ea voluptatibus fidelissimae dolor adipisicing illum</p>
                    <h6> Date article </h6>
                    <hr class="my-4">

                    <h4> phrase accroche dernier art</h4>
                    <p>officia quo nescius imitarentur anim ingeniis sempiternum e quibusdam elit aute 
                        laborum senserit iis do anim tamen enim quid singulis o te malis lorem 
                        praetermissum cernantur proident hic voluptatibus incididunt non eiusmod quid 
                        quae minim hic voluptatibus adipisicing comprehenderit non distinguantur sed 
                        pariatur ita ea voluptatibus fidelissimae dolor adipisicing illum</p>
                    <h6> Date article </h6>
                    <hr class="my-4">

                    <h4> phrase accroche dernier art</h4>
                    <p>officia quo nescius imitarentur anim ingeniis sempiternum e quibusdam elit aute 
                        laborum senserit iis do anim tamen enim quid singulis o te malis lorem 
                        praetermissum cernantur proident hic voluptatibus incididunt non eiusmod quid 
                        quae minim hic voluptatibus adipisicing comprehenderit non distinguantur sed 
                        pariatur ita ea voluptatibus fidelissimae dolor adipisicing illum</p>
                    <h6> Date article </h6>
                    <hr class="my-4">

                    <h4> phrase accroche dernier art</h4>
                    <p>officia quo nescius imitarentur anim ingeniis sempiternum e quibusdam elit aute 
                        laborum senserit iis do anim tamen enim quid singulis o te malis lorem 
                        praetermissum cernantur proident hic voluptatibus incididunt non eiusmod quid 
                        quae minim hic voluptatibus adipisicing comprehenderit non distinguantur sed 
                        pariatur ita ea voluptatibus fidelissimae dolor adipisicing illum</p>
                    <h6> Date article </h6>
                </div>
            </div>

            <div class="row moment1">
                <div class=" col-md-2 offset-md-5 moment2 mb-4">
                    <h2> Articles du moment </h2>
                </div>
            </div>
            <div class="row section3">

                <div class="col-12 col-md-3">
                    <img class="" src="images/3mf66vvr.png" alt="femme">
                </div>
                <div class="col-12 col-md-3">
                    <img src="images/a2lgcmcz.png" alt="femme">
                </div>
                <div class="col-12 col-md-3">
                    <img src="images/awtf2nh2.png" alt="femme">
                </div>
                <div class="col-12 col-md-3"> 
                    <img src="images/38x8qj1i.png" alt="femme">
                </div>
            </div>

            <div class=" row footer ">
                <div class="col-12">
                    <ul class="d-flex  justify-content-around">
                        <a href="#"><li>Home</li></a>
                        <a href="#"><li>About</li></a>
                        <a href="#"><li>Connexion </li></a>
                        <a href="#"><li>JOb </li></a>
                        <a href="#"><li>Legal </li></a>
                        <a href="#"><li>Contact</li></a>
                    </ul>

                </div>                
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    </body>
</html>
