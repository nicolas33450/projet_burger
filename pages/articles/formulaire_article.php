<?php

include 'connexion.php'; 
include 'article.php';
include 'article_manager.php'; 

?>


<!DOCTYPE html>
<html lang="">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire article</title>
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    </head>

    <body>
        <?php
        if(isset ($_POST['valider']))
        {
            $id_article = trim(htmlspecialchars($_POST['id_article']));
            $titre=trim(htmlspecialchars($_POST['titre']));
            $contenu=trim(htmlspecialchars($_POST['contenu']));
            $resume=trim(htmlspecialchars($_POST['resume']));
            $tags=trim(htmlspecialchars($_POST['tags']));
            $id_categorie=trim(htmlspecialchars($_POST['id_categorie']));
            $id_utilisateur=trim(htmlspecialchars($_POST['id_utilisateur']));
            $photo = trim($_POST['photo']); 
            $date_article = date("Y-m-d H:i:s");
            $publie=trim(htmlspecialchars($_POST['publie']));

            if(!empty($_POST['type']))
            {
                if(empty($titre)||empty($contenu)||empty($resume)||empty($id_categorie)||empty($id_utilisateur)||empty($tags))
                {
                    $erreur="Il manque un champ obligatoire";
                    header("Location:formulaire_article.php?erreur=$erreur&type=modifier&id_article=$id_article");
                }
                else
                {

                    $requete = $pdo->prepare('UPDATE article SET titre = :titre, contenu = :contenu, date_article = :date_article, publie = :publie, tags = :tags, resume = :resume, photo = :photo, id_utilisateur = :id_utilisateur, id_categorie = :id_categorie WHERE id_article = :id');

                    $requete -> bindValue(':titre', $titre);
                    $requete -> bindValue(':contenu', $contenu);
                    $requete -> bindValue(':date_article', $date_article);
                    $requete -> bindValue(':publie', $publie);
                    $requete -> bindValue(':tags', $tags);
                    $requete -> bindValue(':resume', $resume);
                    $requete -> bindValue(':photo', $photo);
                    $requete -> bindValue(':id_utilisateur', $id_utilisateur);
                    $requete -> bindValue(':id_categorie', $id_categorie);
                    $requete -> bindValue(':id', $id_article);

                    $requete -> execute();

                    $succes = 'Votre article a bien été modifié';

                    header("Location: ../../articles.php?validation=$succes");
                }
            }
            else
            {
                if(empty($titre)||empty($contenu)||empty($resume)||empty($id_categorie)||empty($id_utilisateur)||empty($tags))
                {
                    $erreur="Il manque un champ obligatoire";
                    header("Location:formulaire_article.php?erreur=$erreur");
                }
                else
                {

                    $requete = $pdo->prepare('INSERT INTO article(titre, contenu, date_article, publie, tags, resume, photo, id_utilisateur, id_categorie) VALUES(:titre, :contenu, :date_article, :publie, :tags, :resume, :photo, :id_utilisateur, :id_categorie)');

                    $requete -> bindValue(':titre', $titre);
                    $requete -> bindValue(':contenu', $contenu);
                    $requete -> bindValue(':date_article', $date_article);
                    $requete -> bindValue(':publie', $publie);
                    $requete -> bindValue(':tags', $tags);
                    $requete -> bindValue(':resume', $resume);
                    $requete -> bindValue(':photo', $photo);
                    $requete -> bindValue(':id_utilisateur', $id_utilisateur);
                    $requete -> bindValue(':id_categorie', $id_categorie);

                    $requete -> execute();


                    $succes = 'Votre article a bien été créé ! <br/>';
                    header("Location: ../../articles.php?validation=$succes");

                }
            }


        }

        else
        {
            if(isset($_GET['type']))
            {
                $id_article=strtoupper(trim(htmlspecialchars($_GET['id_article'])));
                $type=strtoupper(trim(htmlspecialchars($_GET['type'])));
                $article_manager = new ArticleManager($pdo);
                $article = $article_manager -> get($id_article);
                $titre=$article->getTitre();
                $contenu=$article->getContenu();
                $resume=$article->getResume();
                $tags=$article->getTags();
                $date_article=$article->getDate_article();
                $id_utilisateur=$article->getId_utilisateur();
                $id_categorie=$article->getId_categorie();
                $photo=$article->getPhoto();
                $publie=$article->getPublie();
            }
        ?>

        <form action="" method="post">
            <div class="container mt-5 border border p-5 text-center">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <label for="titre">Categorie : </label>
                    </div>
                    <div class="col-12 col-md-8">
                        <select name="id_categorie">

                            <?php
            $requete=$pdo->prepare("SELECT * FROM categorie");
            $requete->execute();
            while($donnees=$requete->fetch())
            {
                            ?>

                            <option value="<?php echo $donnees['id_categorie'];?>" <?php if(isset($type)and ($id_categorie==$donnees['id_categorie'])){echo 'selected';}?>><?php echo $donnees['nom'];?>
                            </option>

                            <?php
            }
                            ?>

                        </select>
                    </div>

                    <div class="col-12 col-md-4">
                        <label for="titre">Utilisateur : </label>
                    </div>
                    <div class="col-12 col-md-8">
                        <select name="id_utilisateur">

                            <?php
            $requete=$pdo->prepare("SELECT * FROM utilisateur");
            $requete->execute();

            while($donnees=$requete->fetch())
            {
                            ?>

                            <option value="<?php echo $donnees['id_utilisateur'];?>" <?php if(isset($type)and ($id_utilisateur==$donnees['id_utilisateur'])){echo 'selected';}?>><?php echo $donnees['nom'];?> <?php echo $donnees['prenom'];?>
                            </option>

                            <?php
            }
                            ?>

                        </select>
                    </div>

                    <div class="col-12 col-md-4">
                        <label for="titre">Publie : </label>
                    </div>
                    <div class="col-12 col-md-8">
                        <select name="publie">
                            <option value="0" <?php if(isset($type)and ($publie==$donnees['publie'])){echo 'selected';}?>>Publie</option>
                            <option value="1" <?php if(isset($type)and ($publie==$donnees['publie'])){echo 'selected';}?>>Brouillon</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="titre">Titre : </label>
                    </div>
                    <div class="col-12 col-md-8">
                        <input type="text" name="titre" id="titre" value="<?php if(isset($type)){echo $titre;}?>" />
                    </div>

                    <div class="col-12 col-md-4">
                        <label for="resume">Resume : </label>
                    </div>
                    <div class="col-12 col-md-8">
                        <input type="text" name="resume" id="resume" value="<?php if(isset($type)){echo $resume;}?>" />
                    </div>
                    
                    <div class="col-12 col-md-4">
                        <label for="photo">Photo : </label>
                    </div>
                    <div class="col-12 col-md-8">
                        <input type="file" name="photo" id="photo"  />
                    </div>

                    <div class="col-12 col-md-4">
                        <label for="tags">Tags: </label>
                    </div>
                    <div class="col-12 col-md-8">
                        <input type="text" name="tags" id="tags" value="<?php if(isset($type)){echo $tags;}?>" />
                    </div>


                    <div class="col-12 col-md-4">
                        <label for="contenu">Contenu: </label>
                    </div>
                    <div class="col-12 col-md-8">
                        <textarea rows="4" cols="50" name="contenu" id="contenu"><?php if(isset($type)){echo $contenu;}?></textarea>
                    </div>

                    <div class="col-12 col-md-9">
                        <input type="hidden" name="type" value="<?php if(isset($type)){echo $type;}?>" />
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="hidden" name="id_article" value="<?php if(isset($type)){echo $id_article;}?>" />
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="submit" name="valider" value="valider" />
                    </div>

                </div>
            </div>
        </form>

        <?php 
            if(isset($_GET['erreur']))
            {
        ?>

        <div class="alert alert-danger">
            <strong>Erreur</strong> <?php echo $_GET['erreur'];
            ?>
        </div>

        <?php
            }
        }
        ?>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>

</html>
