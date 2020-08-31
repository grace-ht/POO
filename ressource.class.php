<?php
class Membre
{
	private $nom;
	private $prenom;
	private $pseudo;
	private $signature;
	private $actif;
	private $email;
	private $id_acteur;
	public function __construct($id_acteur)
	{
		
	}
	public function envoyer_mail($titre,$texte)
	{
		mail($this->email,$titre,$texte);
	}
	public function bannir()
	{
		$this->actif=false;
		$this->envoyer_mail( "exclusion", "desormais vous n'avez plus acces au forum");
	}
	public function getPseudo()
	{
		return $this->pseudo;
	}
	public function setPseudo($nouveau_pseudo)
	{
		if(!empty($nouveau_pseudo)AND strlen($nouveau_pseudo)<15)
		$this->pseudo=$nouveau_pseudo;
	}
	public function setEmail($nouveau_email)
	{
		if( !empty($nouveau_email)AND strlen($nouveau_email)<5)
		$this->email=$nouveau_email;
	}
	public function getEmail()
	{
		return $this->email;
	}
}
class Admin extends Membre
{

}
?>