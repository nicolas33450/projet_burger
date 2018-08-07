<?php
// FONCTIONS AFFICHE LE FORMULAIRE D'AJOUT------------------------------
function affichForm($nom='',$descr='',$parent='',$verif=false)
{
?>
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Ajouter une catégorie</h3>
        </div>
            <!-- /.box-header -->
        <div class="box-body">
            <form action='categorie_page.php' method="post" role="form">
            <!-- text input -->
            <?php verif($nom, $verif)?>
                <div class="form-group">
                <label>Description : </label>
                    <textarea class="form-control" name='descr' rows="3" id="descr" placeholder="Entrer la description de la catégorie..."></textarea>
                </div>
                <div class="form-group">
                    <label>Catégorie Parent</label>
                    <select class="form-control" name='parent'>
                        <option> </option>
                        <?php affichParent()?>
                    </select>
                </div>
                <div class="box-footer">
                    <button type="submit" name='valider' class="btn btn-primary">Valider</button>
                </div>
            </form>
        </div>
    </div>
<?php
}
//VERIFIE LES CHAMPS DU FORMULAIRE--------------------------------
function verif($input,$verif =false)
{
    if (empty($input) && ($verif == true))
    {
?>
        <div class="form-group has-error">
            <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>Nom :</label>
            <input type="text" name='nom' class="form-control" id="inputError" placeholder="Entrer le nom de la catégorie...">
            <span class="help-block">Veuillez renseigner le champ ci-desssus</span>
        </div>
<?php
    }
    else
    {
?>        
    <div class="form-group">
        <label>Nom : </label>
            <input type="text" name='nom' class="form-control" placeholder="Entrer le nom de la catégorie..." id="nom">
    </div>
<?php            
    }
}
// AFFICHE LES CATEGORIES DEJA CREER POUR LA SELECTION DU PARENT DANS LE FORMULAIRE------------------------------
function affichParent()
{
            include 'connexion.php';
            $requete = 'SELECT id_categorie,nom FROM categorie';  
            $resultat = $pdo->query($requete);
            
            while($ligne_tab = $resultat->fetch())
            {
?>
                <option><?php echo $ligne_tab['id_categorie'].' - '.$ligne_tab['nom'] ?></option>
<?php   
            }
            $resultat->closeCursor();
            unset($pdo);
}
// FONCTIONS AFFICHE LE FORMULAIRE DE MODIFICATION------------------------------
function affichForm2($nom='',$descr='',$parent='')
{
?>
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Modifier une catégorie</h3>
        </div>
            <!-- /.box-header -->
        <div class="box-body">
            <form action='categorie_page.php' method="post" role="form">
            <!-- text input -->
                <div class="form-group">
                    <label>Nom : </label>
                    <input type="text" class="form-control" value=<?php $nom ?> id="nom">
                </div>
                <div class="form-group">
                <label>Description : </label>
                    <textarea class="form-control" rows="3" id="descr" value=<?php $descr ?>></textarea>
                </div>
                <div class="form-group">
                    <label>Catégorie Parent</label>
                    <select class="form-control" name='parent'>
                        <option> </option>
                        <?php affichParent()?>
                    </select>
                </div>
                <div class="box-footer">
                    <button type="submit" name='modifier' class="btn btn-primary">Modifier</button>
                </div>
            </form>
        </div>
    </div>
<?php
}
// FONCTIONS AFFICHE LA LISTE DES CATEGORIE DEJA EXISTANTE------------------------------
function afficheCat()
{    
?>
        <div class="row">
                <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                    <h3 class="box-title">Catégories existante</h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                        </div>
                    </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Parent</th>
                            <th>Action</th>
                        </tr>
<?php
                    include 'connexion.php';
                
                    // Requete SQL
                    $requete = 'SELECT * FROM categorie';  
                    
                    // On éxecute la requète (On récupère un jeu d'enregistrements)
                    $resultat = $pdo->query($requete);
                    
                    while($ligne_tab = $resultat->fetch())
                    {
                ?>
                        <tr>
                            <td><?php echo $ligne_tab['id_categorie'] ?></td>
                            <td><?php echo $ligne_tab['nom'] ?></td>
                            <td><?php echo $ligne_tab['description'] ?></td>
                            <td><?php echo $ligne_tab['parent'] ?></td>
                            <th><a href="categorie_page.php?id_categorie=<?= $ligne_tab['id_categorie']?>"><button type='button' class='btn btn-warning btn-xs' name='modif'>Modifier</button></a> <button type='button' class='btn btn-danger btn-xs'name='supprimer'>Supprimer</button></th>
                        </tr>
                <?php
                    }
                    // On ferme le jeu d'enregistrements //href="categorie.php?id_categorie=<?= $ligne_tab['id_categorie'] 
                    $resultat->closeCursor();
                
                    //deconnexion de la bdd
                    unset($pdo);
                ?>
                    </table>
                    </div>
                    <!-- /.box-body -->
            </div>
                <!-- /.box -->
            </div>
        </div>
<?php
}
// DETECTE SI LA PAGE CREER OU VISUALISER EST ACTIVE------------
if(isset($_GET["click"]))
{
    affichForm();
}
else if(isset($_GET["clock"]))
{
    afficheCat();
}
//AJOUTER UNE CATEGORIE-----------------------------------------------------
if(isset($_POST['valider']))
{
    include 'connexion.php';
                        
    $nom = trim($_POST['nom']);
    $descr = trim($_POST['descr']);
    $parent = intval($_POST['parent']);
                        
    if(!empty($nom))
    {
        if ($parent !== 0)
        {
            $requete = $pdo->prepare('INSERT INTO categorie(nom,description,parent) VALUES(:nom,:descr,:parent)');

            $requete->bindValue(':nom', $nom);
            $requete->bindValue(':descr', $descr);
            $requete->bindValue(':parent', $parent);
        }
        else
        {
            $requete = $pdo->prepare('INSERT INTO categorie(nom,description) VALUES(:nom,:descr)');

            $requete->bindValue(':nom', $nom);
            $requete->bindValue(':descr', $descr);
        }
        

        $requete->execute(); 

        ?>
        <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>

              <h3 class="box-title">La catégorie à bien été ajouté !</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl class="dl-horizontal">
                <dt>Nom : </dt>
                <dd><?= $nom ?></dd>
                <dt>Description : </dt>
                <dd><?= $descr ?></dd>
                <dt>Parent : </dt>
                <dd><?= $parent ?></dd>
              </dl>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <?php
    }
    else
    {
        affichForm($nom,$descr,$parent,true);
    }

}

//MODIFIER UNE CATEGORIE-----------------------
if(isset($_GET['id_categorie']))
{
    include 'connexion.php';
    $id_cat = $_GET['id_categorie'];
    $requete = $pdo->prepare('SELECT nom, description, parent FROM categorie WHERE id_categorie =:id_cat');

    $requete->bindValue(':id_cat', $id_cat);

    $requete->execute();

    if($ligne_tab = $requete->fetch())
    {
        $nom = $ligne_tab['nom'];
        $descr = $ligne_tab['description'];
        $parent = $ligne_tab['parent'];
        affichForm2($nom,$descr,$parent);
    }
}

