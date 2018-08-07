<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Banniere</title>
    <link rel="stylesheet" href="css/clients.css">
</head>

<body>
   
   
     
       <h1> Afficher bannière</h1>
    <div class="container liste">
      <div class="row">
        <div class="col-12 col-md-4" value="">Id_banniere</div>  
         <div class="col-12 col-md-4">Id_article</div> 
         <div class="col-12 col-md-4">Position</div>  
      </div>  
        
    
     
      <?php
      
    // require 'connexion.php'; c'est la même chose
    include 'connexion.php';
    
    // la requête SQL
    $requete = 'SELECT id_banniere, id_article, position FROM banniere';
    
    // On exécute la requête (on récupère un jeu d'enregistrements)
    $resultat = $pdo->query($requete);
    
    
  
 
    while($ligne_tab = $resultat->fetch())
    {
     ?>
       <div class="row">
        <div class="col-12 col-md-4"><?=  $ligne_tab['id_banniere'] ?></div>  
          <div class="col-12 col-md-4"><?= $ligne_tab['id_article'] ?></div>
          <div class="col-12 col-md-4"><?=  $ligne_tab['position'] ?></div>
           
           </div> 
           <?php
       // echo $ligne_tab['n_cli'] . ' '.$ligne_tab['nom_cli'] . ' '.$ligne_tab['ville_cli'] . '<br />';
    }
    // On ferme le jeu d'enregistrement
    $resultat->closeCursor();
    
    // Déconnexion de la base de donnée
    unset ($pdo);
    
    ?>
    </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  
</body>
</html>
