<?php

function visualiserImage()
{

    include 'connexion.php';
    include 'supprimer_image.php';

    $requete = 'SELECT id_galerie, photo, position, lien FROM galerie';

    $resultat = $pdo->query($requete);


?>



<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Images dans la base de données</h3>
                </div>
                <div class="box-body">
                    <table id="viz_img" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id Image</th>
                                <th>Titre</th>
                                <th>Position</th>
                                <th>Lien</th>
                                <th>Image</th>
                                <th>Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            while($ligne_tab = $resultat->fetch())
                            {
                            ?>

                            <tr>
                                <td><?php echo $ligne_tab['id_galerie'] ?></td>
                                <td><?php echo $ligne_tab['photo'] ?></td>
                                <td><?php echo $ligne_tab['position'] ?></td>
                                <td><?php echo $ligne_tab['lien'] ?></td>
                                <td><img src="/projet_burger/<?php echo $ligne_tab['lien'] ?>" alt="<?php  echo $ligne_tab['photo'] ?>" title="<?php echo $ligne_tab['photo'] ?>" height="auto" width="100px" /> </td>
                                <td><a href="supprimer_image.php?id=<?php $ligne_tab['id_galerie'] ?>" ><img src="image/delete.svg" alt="delete" title="delete" height="25px" width="auto" /></a></td>
                            </tr>

                            <?php
                            }
                            ?>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Id Image</th>
                                <th>Titre</th>
                                <th>Position</th>
                                <th>Lien</th>
                                <th>Image</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>



<?php


    $resultat->closeCursor();

    unset($pdo);
}


visualiserImage();
?>