<?php

function afficheForm($banniere = '',$article = '',$position = '')
{
?>
	<form action="rechercher_banniere.php" method="post">
		<label for="idnum">id_banniere : </label>
		<input type="text" id="idb" name="banniere" value="<?php echo  $banniere; ?>" size="30" maxlength="40"/>
		<br />
		<label for="idnum">id_article : </label>
		<input type="text" id="ida" name="article" value="<?php echo  $article; ?>" size="30" maxlength="40"/>
		<br />
		<label for="idn">position : </label>
		<input type="text" id="idp" name="position" value="<?php echo  $position; ?>" size="30" maxlength="40"/>
		<br />
		
		<br />
		<input type="submit" value="Rechercher" name="rechercher" />
	</form>
<?php
}
?>



<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Rechercher bannière</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

		<link rel="stylesheet" href="moncss.css">
	</head>

	<body>
		<h1>Rechercher bannière </h1>

		<?php
		// On vérifie si la page a reçue le bouton rechercher par la méthode POST (==> donc on a validé le formulaire)
		if(isset($_POST['rechercher']))
		{

			// On récupère les données envoyées par la formulaire (dans des variables)
			$banniere=trim($_POST['banniere']);
			$article=trim($_POST['article']);
			$position=trim($_POST['position']);
			

			// On ré-affiche le formulaire
			afficheForm($banniere, $article, $position);

			
			if ((empty($banniere)) || (empty($article)) || (empty($position))  )
			{
				$banniere = $banniere . '%';
				$article = $article . '%';
				$position = $position  . '%';
				
               
				
				//Connexion à la base de données
				require 'connexion.php';

				$requete = $pdo->prepare("SELECT id_banniere, id_article, position FROM banniere where id_banniere like :banniere and id_article like :article and position like :position ");

				$requete->bindValue(':banniere', $banniere);
				$requete->bindValue(':article', $article);
				$requete->bindValue(':position', $position);
				
                

				//On exécute la requête
				$requete->execute();
				
				// On récupère le nombre de ligne dans le recordset
				$nb_ligne= $requete->rowCount();
				echo 'Nombre de ligne(s) : ' . $nb_ligne . '<br />';
				
				if ($nb_ligne != 0)
				{
				?>
					<div class="container mt-5">
						<div class="row">
						<div class="d-none col-12 d-md-block col-md-3 text-center">id_banniere</div>
							<div class="d-none col-12 d-md-block col-md-3 text-center">id_article</div>
							<div class="d-none col-12 d-md-block col-md-3 text-center">Position</div>
							
							<div class="d-none col-12 d-md-block col-md-3 text-center">Modifier</div>
							
						</div>	
						<?php
						while($ligne_tab = $requete->fetch())
						{
						?>
							<div class="row border border-info">
								<div class="col-12 col-md-3"><?= $ligne_tab['id_banniere'] ?></div>
								<div class="col-12 col-md-3"><?= $ligne_tab['id_article'] ?></div>
								<div class="col-12 col-md-3"><?= $ligne_tab['position'] ?></div>
								
								<div class="col-12 col-md-3 text-center"><a href="modif.php?banniere=<?=$ligne_tab['id_banniere'] ?> "> <img src="image/crayon.jpg" /></a> </div>
							</div>
						<?php
						}

						// On vide le jeu d'enregistrements
						$requete->closeCursor();

						// Déconnexion de la base de données
						unset($pdo);		

						?>
					</div>
				<?php
				}
				else
				{
				?>
					<div class="container mt-5">
						<div class="row">
							<div class="col-12 text-center">
								Désolé aucun client correspond à ce critère
							</div>
						</div>
					</div>
				<?php
				}
			}
			else
			{
				?>
				
				<div class="container mt-5">
						<div class="row">
							<div class="col-12 text-center">
								Veuillez remplir un des champs
							</div>
						</div>
					</div>
				<?php
			}
		}
		else
		{
			afficheForm();
		}
		?>

			

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	</body>
</html>
