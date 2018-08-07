<?php
include 'galerie.php';
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["img"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["img"]["tmp_name"]);
    if($check !== false) {
        echo "Le ficher est une image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Votre ficher n\'est pas une image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Desolé, l'image existe déjà.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["img"]["size"] > 5000000) {
    echo "Désolé, le volume de votre image est trop important.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
   && $imageFileType != "gif" ) {
    echo "Désolé, uniquement de fichiers JPG, JPEG, PNG & GIF sont autorisées.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Désolé, votre image n'est pas téléchargée.";
    // if everything is ok, try to upload file
} else {
    
    
    
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
        echo "L'image ". basename( $_FILES["img"]["name"]). " est sauvegardée.";
        
        
    } else {
        echo "Désolé, il s'y produit une erreur pendant le téléchargement.";
    }
}


if($uploadOk == 1)
{

    require_once 'connexion2.php';
    //            ajouterImage($image, $pos, $lien);

    $image = $_POST['titre'];
    $pos = $_POST['pos'];
    $lien = "uploads/".$_FILES["img"]["name"];

    if ((!empty($pos)) || (!empty($lien)))
    {
        $requete = $pdo->prepare('insert into galerie (photo, position, lien) values (:image, :pos, :lien) ');

        $requete->bindValue(':image', $image);
        $requete->bindValue(':pos', $pos);
        $requete->bindValue(':lien', $lien);

        $requete->execute();
        
    }
}

echo "<script type='text/javascript'>document.location.replace('galerie_page.php');</script>";


?>