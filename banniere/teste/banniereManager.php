<?php

class BanniereManager
{
	private $pdo;
	
	function __construct($connect)
	{
		$this->setPdo($connect);
	}
	
	
	// Permet d'insérer un client (Requête INSERT)
	public function add(Banniere $id)
	{
		$requete = $this->pdo->prepare('INSERT INTO banniere(id_article, position) VALUES(:id_article, :position)');

		$requete->bindValue(':id_article', $id->getId_article(), PDO::PARAM_INT);
		$requete->bindValue(':position', $id->getPosition(), PDO::PARAM_INT);
		
		if($res)
		{
			$id=$this->pdo->lastInsertId();
		}
		else
		{
			$id=0;
		}
	
		return $id;
	}

	// Permet de supprimer un client (Requête DELETE)
	// Rarement utilisé (car on efface rarement dans la base de données)
	public function delete($idBan)
	{
		$requete = $this->pdo->prepare('DELETE FROM banniere WHERE id_banniere = :id');
		$requete->bindValue(':id', $idban);
		$res = $requete->execute();
		return $res;
	}

	// Retourne un objet Client dont l'id est indiqué (SELECT ... WHERE id= )
	public function get($idBan)
	{
		$requete = $this->pdo->prepare('SELECT  id_banniere, id_article, position  FROM banniere WHERE id_banniere = :id');
		$requete->bindValue(':id', $idBan);
		$requete->execute();
		// ici on retourne un tableau dans $resultat
		$tabResultat = $requete->fetch(PDO::FETCH_ASSOC);
		return new Banniere($tabResultat);
	}

	// Retourne la liste de tous les Clients (tableau des clients (Objets))
	public function getList()
	{
		$tabListe = [];
		$requete = $this->pdo->query('SELECT id_banniere, id_article, position FROM banniere ORDER BY id_banniere');
		while ($resultat = $requete->fetch(PDO::FETCH_ASSOC))
		{
			$tabListe[] = new Banniere($resultat);
		}
		return $tabListe;
	}


	public function update(banniere $ban)
	{
		$requete = $this->pdo->prepare('update banniere set id_banniere = :id, id_article = :id_article, position = :position WHERE id_banniere = :id');
		
		$requete->bindValue(':id', $ban->getId_banniere(), PDO::PARAM_INT);
		$requete->bindValue(':id_article', $ban->getId_article(), PDO::PARAM_INT);
		$requete->bindValue(':position', $cban->getPosition(), PDO::PARAM_INT);
		
		return $requete->execute();
	}



	public function setPdo(PDO $connect)
	{
		$this->pdo = $connect;
	}



}