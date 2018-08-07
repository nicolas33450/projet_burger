<?php 


function ajouterImage($image = '', $pos = '', $lien = '')
{
?>



        <div class="box box-primary">
            <form role="form" action="upload.php" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="form-group">
                        <label for="img">Importer photo (pensez bien à enlever les charactères speciaux) :</label>
                        <input type="file" class="form-control-file mt-3" id="img" name="img">
                    </div> 
                    <div class="form-group">
                        <label for="idPhoto">Titre de l'image :</label>
                        <input type="text" class="form-control" id="idPhoto" name="titre" value="<?= $image ?>">
                    </div> 
                    <div class="form-group">
                        <label for="idPos">Position :</label>
                        <select class="form-control" id="idPos" name="pos" value="<?= $pos ?>">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control hidden" id="idLien" name="lien" value="<?= $lien  ?>">
                    </div> 
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="valider">Valider</button>
                </div>
            </form>
        </div>
    

<?php
}

ajouterImage();

?>


        
