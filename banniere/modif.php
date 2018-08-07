<?php


// Fonction qui écrit une étoile si le champ est vide
function affich_etoile($champ, $v, $message='')
{
	if (empty($champ) && $v)
	{
		echo '<span class="rouge">* Veuillez saisir ' . $message .'.</span>';
		//echo '<span class="rouge">*</span>';
	}
	else
	{
		echo '*';
	}
}


// Déclaration de la fonction (pour afficher le formulaire)
function formulaire($id_banniere='', $id_article='', $position='', $verif=false)
{
?>

<form action="modif.php" method="post">

	<div class="container mt-5">
		<div class="row">
			<div class="col-12 offset-md-2 col-md-8">
				<div class="row">
					<div class="col-12 col-md-2">
						<input type="hidden" name="banniere" value="<?= $id_banniere ?>" />
						<label for="idb">id_bannière :</label>
					</div>
					<div class="col-12 col-md-6">
						<input type="hidden" name="article" id="idb" value="<?= $id_banniere ?>" />
					</div>
					<div class="col-12 col-md-4">
						<?php affich_etoile($id_banniere, $verif, ' la banniere'); ?>
					</div>

					<div class="col-12 col-md-2">
						<label for="ida">id_article :</label>
					</div>
					<div class="col-12 col-md-6">
						<input type="text" name="article" id="ida" value="<?= $id_article ?>" />
					</div>
					<div class="col-12 col-md-4">
						<?php affich_etoile($id_article, $verif, 'les article'); ?>
					</div>


					<div class="col-12 col-md-2">
						<label for="idp">Position :</label>
					</div>
					<div class="col-12 col-md-6">
						<input type="text" name="position" id="idp" value="<?= $position ?>" /> 
					</div>
					<div class="col-12 col-md-4">
						<?php affich_etoile($position, $verif, 'la position'); ?>
					</div>
					
					<div class="col-12 text-center">
						<input type="submit" name="modifban" value="Modifier" />
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<?php
}
?>		


<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Modifier bannière</title>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
		<link rel="stylesheet" href="moncss.css">
	</head>

	<body>
		<?php

		if(isset($_GET['banniere']))
		{
			$banniere=trim($_GET['banniere']);
			
			require 'connexion.php';

			$requete = $pdo->prepare("SELECT * FROM banniere WHERE id_banniere = :banniere");

			$requete->bindValue(':banniere', $banniere);
			$requete->execute();

			if ($ligne_tab = $requete->fetch())
			{

				formulaire( $ligne_tab['id_banniere'], $ligne_tab['id_article'], $ligne_tab['position'], true);

			}
			else
			{
				echo 'Bizarre bizarre, aucune bannière correspond à ce numéro !!!!';
			}
		}
		elseif(isset($_POST['modifban']))
		{
			$banniere=$_POST['banniere'];
			$article = $_POST['article'];
			$position = $_POST['position'];
			
			
			// On vérifie que tous les champs obligatoires sont remplis
			if((empty($banniere)) || (empty($article)) || (empty($position)))
			{
				formulaire( $banniere, $article, $position, true);
			}
			else
			{
				require 'connexion.php';

				$requete = $pdo->prepare("UPDATE banniere SET  id_article = :article, position = :position  where id_banniere = :banniere");

				$requete->bindValue(':banniere', $banniere);
				$requete->bindValue(':article', $article);
				$requete->bindValue(':position', $position);
				
							
				$requete->execute();
				
				 header('location: rechercher_banniere.php ');

			}
			
			
			
		}
		else
		{
			echo 'Que faites vous là ?';
		}

		?>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

	</body>
</html>
