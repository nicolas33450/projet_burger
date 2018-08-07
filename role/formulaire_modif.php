<?php

// Déclaration de la fonction (pour afficher le formulaire)
function formulaire($id_role='', $nom='', $admin='', $moderateur='')
{
?>

<form action="formulaire_modif.php" method="post">

	<div class="container mt-5">
		<div class="row">
			<div class="col-12 offset-md-2 col-md-8">
				<div class="row">
					<div class="col-12 col-md-6">
						<input type="hidden" name="id_role" value="<?= $id_role ?>" />
						<label for="nom">Nom :</label>
					</div>
					<div class="col-12 col-md-6">
						<input type="text" name="nom" id="nom" value="<?= $nom ?>" />
					</div><div class="col-12 col-md-6">
						<label for="admin">Admin :</label>
					</div>
					<div class="col-12 col-md-6">
						<input type="text" name="admin" id="admin" value="<?= $admin ?>" />
					</div><div class="col-12 col-md-6">
						<label for="moderateur">Modérateur :</label>
					</div>
					<div class="col-12 col-md-6">
						<input type="text" name="moderateur" id="moderateur" value="<?= $moderateur ?>" /> 
					</div>
					<div class="col-12 text-center mt-3">
						<input type="submit" name="modifrole" value="Modifier" />
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
		<title>Ajout article</title>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
		<link rel="stylesheet" href="moncss.css">
	</head>

	<body>
		<?php

		if(isset($_GET['id_role']))
		{
			$id_role=trim($_GET['id_role']);
			
			require 'connexion.php';

			$requete = $pdo->prepare("SELECT * FROM role WHERE id_role = :id_role");

			$requete->bindValue(':id_role', $id_role);
			$requete->execute();

			if ($ligne_tab = $requete->fetch())
			{

				formulaire( $ligne_tab['id_role'], $ligne_tab['nom'], $ligne_tab['admin'], $ligne_tab['moderateur']);

			}
			else
			{
				echo 'Aucun rôle ne correspond à cet id';
			}
		}
		elseif(isset($_POST['modifrole']))
		{
			$id_role=$_POST['id_role'];
			$nom = $_POST['nom'];
			$admin = $_POST['admin'];
			$moderateur = $_POST['moderateur'];
			
			// On vérifie que tous les champs obligatoires sont remplis
			if((empty($id_role)) || (empty($nom)))
			{
				formulaire( $id_role, $nom, $admin, $moderateur);
			}
			else
			{
				require 'connexion.php';

				$requete = $pdo->prepare("UPDATE role SET nom = :nom, admin = :admin, moderateur = :moderateur WHERE id_role = :id_role");

				$requete->bindValue(':id_role', $id_role);
				$requete->bindValue(':nom', $nom);
				$requete->bindValue(':admin', $admin);
				$requete->bindValue(':moderateur', $moderateur);
							
				$requete->execute();
				
				header ('location: rechercher_role.php');

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
