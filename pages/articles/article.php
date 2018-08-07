<?php 

//création classe Article


class Article 
{
    private $id_article;
    private $titre;
    private $contenu;
    private $date_article;
    private $publie;
    private $tags;
    private $resume;
    private $photo;
    private $id_utilisateur;
    private $id_categorie; 

    // ************************************************************ 
    //                  CONSTRUCTEUR
    // ************************************************************

    public function __construct (Array $tabArticle = null)
    {
        if ($tabArticle == null)
        {
            $this -> id_article = 0;
            $this -> titre = '';
            $this -> contenu = '';
            $this -> date_article = '';
            $this -> publie = '';
            $this -> tags = '';
            $this -> resume = '';
            $this -> photo = '';
            $this -> id_utilisateur = 0;
            $this -> id_categorie = 0;
        }
        else 
        {
            foreach ($tabArticle as $indice => $valeur)
            {
                $methode = 'set' . ucfirst($indice); 
                if (method_exists($this, $methode))
                {
                    $this -> $methode($valeur);
                }
            }
        }
    }


    public function hydrate(Array $tabArticle = null)
    {
        if ($tabArticle != null)
        {
            foreach ($tabArticle as $indice => $valeur)
            {
                $methode = 'set' . ucfirst($indice); 
                if (method_exists($this, $methode))
                {
                    $this -> $methode($valeur);
                }
            }
        }
    }



    // ************************************************************ 
    //                  GETTEURS ET SETTEURS
    // ************************************************************

    public function getId_article(){
        return $this->id_article;
    }

    public function setId_article($id_article){
        $this->id_article = $id_article;
    }

    public function getTitre(){
        return $this->titre;
    }

    public function setTitre($titre){
        $this->titre = $titre;
    }

    public function getContenu(){
        return $this->contenu;
    }

    public function setContenu($contenu){
        $this->contenu = $contenu;
    }

    public function getDate_article(){
        return $this->date_article;
    }

    public function setDate_article($date_article){
        $this->date_article = $date_article;
    }

    public function getPublie(){
        return $this->publie;
    }

    public function setPublie($publie){
        $this->publie = $publie;
    }

    public function getTags(){
        return $this->tags;
    }

    public function setTags($tags){
        $this->tags = $tags;
    }

    public function getResume(){
        return $this->resume;
    }

    public function setResume($resume){
        $this->resume = $resume;
    }

    public function getPhoto(){
        return $this->photo;
    }

    public function setPhoto($photo){
        $this->photo = $photo;
    }

    public function getId_utilisateur(){
        return $this->id_utilisateur;
    }

    public function setId_utilisateur($id_utilisateur){
        $this->id_utilisateur = $id_utilisateur;
    }

    public function getId_categorie(){
        return $this->id_categorie;
    }

    public function setId_categorie($id_categorie){
        $this->id_categorie = $id_categorie;
    }


}

