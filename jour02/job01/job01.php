<?php

class Rectangle{

    private $longueur;
    private $largeur;

    public function __construct($longueur, $largeur){
        $this->longueur = $longueur;
        $this->largeur = $largeur;

    }

    public function setLongueur($newLongueur){
        $this->longueur = $newLongueur;
        
    }

    public function setLargeur($newLargeur){
        $this->largeur = $newLargeur;
        
    }

    public function getLongueur(){
        return $this->longueur."<br>";
        
    }

    public function getLargeur(){
        return $this->largeur."<br>";
        
    }
}

$rec = New Rectangle(10, 5);

echo "Longueur initiale: <br>";
echo $rec->getLongueur();
echo "Largeur initiale: <br>";
echo $rec->getLargeur();

$rec->setLongueur(30);
$rec->setLargeur(50);

echo "Nouvelle Longueur: <br>";
echo $rec->getLongueur();
echo "Nouvelle largeur: <br>";
echo $rec->getLargeur();



?>
