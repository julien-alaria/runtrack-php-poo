<?php

class Forme{
     
    public function aire(){
        return 0;
    }
}

class Rectangle extends Forme{
    public $largeur;
    public $hauteur;

    public function __construct($largeur, $hauteur){
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
        $this->aire();
    }

    public function aire(){
        return $this->largeur * $this->hauteur;
    }
}

$forme1 = New Forme(1);
$rectangle1 = New Rectangle(3,4);
echo $rectangle1->aire();

?>