<?php

class ArticleManager
{
    private $pdo;
    
    
    public function __construct($connect)
    {
        $this -> setPdo($connect);
    }
    
    
    // Permet d'insérer un article (Requête INSERT)
	public function add(Article $art)
	{
		$requete = $this->pdo->prepare('INSERT INTO article(titre, contenu, date_article, publie, tags, resume, photo, id_utilisateur, id_categorie) VALUES(:titre, :contenu, :date, :publie, :tags, :resume, :photo, :id_utilisateur, :id_categorie)');

		$requete -> bindValue(':titre', $art->getTitre(), PDO::PARAM_STR);
		$requete -> bindValue(':contenu', $art->getContenu(), PDO::PARAM_STR);
		$requete -> bindValue(':date', $art->getDate_article());
		$requete -> bindValue(':publie', $art->getPublie());
		$requete -> bindValue(':tags', $art->getTags(), PDO::PARAM_STR);
		$requete -> bindValue(':resume', $art->getResume(), PDO::PARAM_STR);
		$requete -> bindValue(':photo', $art->getPhoto(), PDO::PARAM_STR);
        $requete -> bindValue(':id_utilisateur', $art->getId_utilisateur());
        $requete -> bindValue(':id_categorie', $art->getId_categorie());
        
		$res = $requete->execute();

	}

	// Permet de supprimer un article (Requête DELETE)
	// Rarement utilisé (car on efface rarement dans la base de données)
	public function delete($id_article)
	{
		$requete = $this->pdo->prepare('DELETE FROM article WHERE id_article = :id');
		$requete->bindValue(':id', $id_article);
		$res = $requete->execute();
		return $res;
	}

	// Retourne un objet Article dont l'id est indiqué (SELECT ... WHERE id= )
	public function get($id_article)
	{
		$requete = $this->pdo->prepare('SELECT id_article, titre, contenu, date_article, publie, tags, resume, photo, id_utilisateur, id_categorie FROM article WHERE id_article = :id');
		$requete->bindValue(':id', $id_article);
		$requete->execute();
		// ici on retourne un tableau dans $resultat
		$tabResultat = $requete->fetch(PDO::FETCH_ASSOC);
		return new Article($tabResultat);
	}

	// Retourne la liste de tous les articles (tableau des articles (Objets))
	public function getList()
	{
		$tabListe = [];
		$requete = $this->pdo->query('SELECT id_article, titre, contenu, date_article, publie, tags, resume, photo, id_utilisateur, id_categorie FROM article ORDER BY id_article');
		while ($resultat = $requete->fetch(PDO::FETCH_ASSOC))
		{
			$tabListe[] = new Article($resultat);
		}
		return $tabListe;
	}
                            
                                                      

    public function update(Article $article)
	{
		$requete = $this->pdo->prepare('UPDATE article SET titre = :titre, contenu = :contenu, date_article = :date_article, publie = :publie, tags = :tags, resume = :resume, photo = :photo, id_utilisateur = :id_utilisateur, id_categorie = :id_categorie WHERE id_article = :id');
		$requete -> bindValue(':id', $article->getId_article());
		$requete -> bindValue(':titre', $article->getTitre(), PDO::PARAM_STR);
		$requete -> bindValue(':contenu', $article->getContenu(), PDO::PARAM_STR);
		$requete -> bindValue(':date_article', $article->getDate_article());
		$requete -> bindValue(':date_article', $article->getDate_article());
		$requete -> bindValue(':publie', $article->getPublie());
		$requete -> bindValue(':tags', $article->getTags(), PDO::PARAM_STR);
		$requete -> bindValue(':resume', $article->getResume(), PDO::PARAM_STR);
		$requete -> bindValue(':photo', $article->getPhoto(), PDO::PARAM_STR);
        $requete -> bindValue(':id_utilisateur', $article->getId_utilisateur());
        $requete -> bindValue(':id_categorie', $article->getId_categorie());
		return $requete -> execute();
	}
    
    
    
    
    
    
    
// ************************************************************ 
//                  GETTEURS ET SETTEURS
// ************************************************************
    
    public function setPdo(PDO $connect)
	{
		$this->pdo = $connect;
	}
    
    
}