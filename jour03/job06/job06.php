<?php
class Vehicule{

    public string $marque;
    public string $modele;
    public int $annee;
    public int $prix;

    public function __construct($marque, $modele, $annee, $prix){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->prix = $prix;
    }

    public function informationsVehicule(){
    echo    "Marque = ".$this->marque."<br>".
            "Modele = ".$this->modele."<br>".
            "Annee = ".$this->annee."<br>".
            "Prix = ".$this->prix."€";
    }
  
}

class Voiture extends Vehicule{
    public int $portes = 4;

    public function __construct($marque, $modele, $annee, $prix, $portes){
        parent::__construct($marque, $modele, $annee, $prix);
        $this->portes = $portes;

    }

    public function informationsVehicule() {
        parent::informationsVehicule();
        echo "<br>";  
        echo "Nombre de portes = " . $this->portes . "<br>";  
    }

}

class Moto extends Vehicule{
    public $roue = 2;

    public function __construct($marque, $modele, $annee, $prix, $roue){
        parent::__construct($marque, $modele, $annee, $prix);
        $this->roue = $roue;
    }

    public function informationsVehicule(){
        parent::informationsVehicule();
        echo "<br>";
        echo "Nombre de roues = ".$this->roue."<br>";
    }
}

$newvoiture = New Voiture("Mercedes", "Classe A", 2020, 18500, 4);
$newvoiture->informationsVehicule();
echo "<br></br>";
$moto1 = New Moto("Yamaha","1200 Vmax", 1987, 4500, 2);
$moto1->informationsVehicule();
?>
