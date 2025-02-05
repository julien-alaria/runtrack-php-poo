<?php

class Personne{

    public int $age = 14;

    public function __construct($age){   
        $this->age = $age;
        
    }

    public function afficherAge(){
        echo $this->age;
    }

    public function bonjour(){
        echo "Hello";
    }

    public function modifierAge($newAge){
        $this->age = $newAge;
    }
        
}

class Eleve extends Personne{

    public function allerEnCours(){
        echo "Je vais en cours.";
    }
    public function afficherAge(){
        echo "J'ai {$this->age} ans.";
        
    }
}

class Professeur extends Personne{

    private $matiereEnseignee;

    public function __construct($matiereEnseignee){
        $this->matiereEnseignee = $matiereEnseignee;

    }

    public function enseigner(){
        echo "Le cours va commencer";
    }

    public function getMatiereEnseignee(){
    return $this->matiereEnseignee;
    }
}



$personne1 = new Personne(16);

$eleve1 = new Eleve(15);
echo $eleve1->bonjour();
echo "<br>";
echo $eleve1->allerEnCours();
echo "<br>";
$eleve1->modifierAge(15);
echo $eleve1->afficherAge();
echo"<br>";
$professeur1 = new Professeur(40);
echo $professeur1->bonjour();
echo"<br>";
$professeur1->enseigner();
?>
