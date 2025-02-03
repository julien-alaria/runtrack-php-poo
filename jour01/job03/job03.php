<?php
 class Personne {
    //attributs
    public $prenom; 
    public $nom;
    //constructeur qui initialise les attributs avec les valeurs
    public function __construct($prenom, $nom) {
        $this->prenom = $prenom;
        $this->nom = $nom;
    }
    //methode
    public function SePresenter() {
        echo "je suis " . $this->prenom . " " . $this->nom . " ";
    }
 }

 $personne1 = new Personne("Jean", "Dupont");
 $personne2 = new Personne("Marc", "Python");
 $personne3 = new Personne("Thierry", "Blanc");

 echo $personne1->SePresenter() . "<br>";
 echo $personne2->SePresenter() . "<br>";
 echo $personne3->SePresenter() . "<br>";