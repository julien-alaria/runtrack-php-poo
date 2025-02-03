<?php

class Animal {
     
    public $age;
    public $prenom;

    public function __construct($age = 0, $prenom = "") {
        $this->age = $age;
        $this->prenom = $prenom;

    }

    public function age_animal() {
        echo " l'age de l'animal est de " . $this->age . " an(s).<br>";

    }

    public function vieillir() {
        $this->age += 1;
        echo "l'age de l'animal est de " . $this->age . " an(s).<br>";
    }

    public function nommer($prenom){
        $this->prenom = $prenom;
        echo "l'animal se nomme " .$this->prenom . ".";

    }
    
}
$a = new Animal();
$a->age_animal();
$a->vieillir();
$a->nommer("rex");




?>
