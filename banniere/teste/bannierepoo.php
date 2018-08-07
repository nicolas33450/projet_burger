<?php

class Banniere 
{
	private $id_banniere;
	private $id_article;
	private $position;
	
	
	
	public function __construct( Array $tabBanniere=null)
	{
		
		if($tabBanniere == null)
		{
			$this->id_banniere=0;
			$this->id_article='';
			$this->position='';
			
		}
		
		else 
		{
			foreach ($tabBanniere as $indice=> $valeur)
		{
			$methode = 'set' . ucfirst($indice);
			if(method_exists($this, $methode))
			{
				$this->$methode($valeur);
			}
		}
			
		}
	}
	
	public function afficheInfos()
	{
		echo '<br /><br />id_banniere : ' . $this->getId_banniere();
		echo '<br />id_article : ' . $this->getId_article();
		echo '<br />Position : ' . $this->getPosition();
		

	}
	
	public function hydrate( Array $tabBanniere=null)
	{
		if($tabBanniere != null)
		{
			foreach ($tabBanniere as $indice=> $valeur)
		  {
			$methode = 'set' . ucfirst($indice);
			if(method_exists($this, $methode))
			{
				$this->$methode($valeur);
			}
		  }
			
		}
		
	}
	
	
	
	public function getId_banniere(){
		return $this->id_banniere;
	}

	public function setId_banniere($id_banniere){
		$this->id = $id_banniere;
	}

	public function getId_article(){
		return $this->id_article;
	}

	public function setId_article($id_article){
		$this->id = $id_article;
	}

	public function getPosition(){
		return $this->position;
	}

	public function setPosition($position){
		$this->position = $position;
	}

	
}