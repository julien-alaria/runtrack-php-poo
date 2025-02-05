<?php

class Rectangle{

    private $longueur;
    private $largeur;

    public function __construct($longueur, $largeur){
        $this->longueur = $longueur;
        $this->largeur = $largeur;

    }

    public function perimetre(){
        return 2 * ($this->longueur + $this->largeur);
        
    }
    public function surface(){
        return $this->longueur * $this->largeur;

    }

    public function getLongueur() {
        return $this->longueur;
    }

    public function getLargeur() {
        return $this->largeur;
    }


    public function getPerimetre(){
        return $this->perimetre();
        
    }
    public function getSurface(){
        return $this->surface();

    }
    public function setPerimetre($newLongueur, $newLargeur){
        $this->longueur = $newLongueur;
        $this->largeur = $newLargeur;
        
    }
    public function setSurface($newLongueur, $newLargeur){
        $this->longueur = $newLongueur;
        $this->largeur = $newLargeur;


    }
}

class Parallelepipede extends Rectangle{
    public $hauteur;

    public function __construct($longueur, $largeur, $hauteur){
        parent::__construct($longueur, $largeur);
        $this->hauteur = $hauteur;

    }

    public function volume() {
        return $this->getLongueur() * $this->getLargeur() * $this->hauteur;
    }

}

$rectangle1 = New Rectangle(2, 5);
echo "Perimetre du rectangle : " . $rectangle1->perimetre();
echo "<br>";
echo "Surface du rectangle : " . $rectangle1->surface();
echo "<br>";
$parellelepipede1 = New Parallelepipede(5,6,7);
echo "Volume de parallelepipede : " . $parellelepipede1->volume();


?>
