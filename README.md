 # POO
 une petite démo
 class member
 {
 private $nom;
 private $login_utilisateur;
 public function setnom($nouveau_nom)
 {
 if(strlen($nouveau_nom)>=10)
 this->nom= $nouveau_nom;
 }
 public function getnom
 {
 return this->nom;
 }
}
