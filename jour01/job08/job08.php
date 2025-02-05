<?php

class Produit{

    public $nom;
    public $prixHT;
    public $TVA;

    public function __construct($nom, $prixHT, $TVA){
        $this->nom = $nom;
        $this->prixHT = $prixHT;
        $this->TVA = $TVA;
    }

    public function CalculerPrixTTC(){
        return $this->prixHT + ($this->prixHT * $this->TVA / 100);

    }

    public function afficher(){
        return "Nom : " . $this->nom ."<br>".
                "Prix HT : " . $this->prixHT ."€<br>".
                "TVA : " . $this->TVA . "%<br>" .
                "Prix TTC : " . $this->CalculerPrixTTC();
    }

    public function modifierNom($newNom){
        $this->nom = $newNom;

    }

    public function modifierPrix($newPrix){
        return $this->prixHT = $newPrix;

    }
}

$produit = New Produit("Coca", 8, 10);
echo $produit->afficher()."<br>";

$produit->modifierNom("pepsi");
echo $produit->afficher()."<br>";

$produit->modifierprix(30);
echo $produit->afficher()."<br>";

$produit2 = New Produit("livre", 15, 5);
echo $produit2->afficher()."<br>";

$produit3 = New Produit("Pain", 2, 10);
echo $produit3->afficher();
?>
