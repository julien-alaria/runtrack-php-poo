<?php

class Cercle{

    public $rayon;

    public function __construct($rayon){
        $this->rayon = $rayon;
    }

    public function changerRayon($newrayon){
        $this->rayon = $newrayon;
    }

    public function afficherinfos(){
        return "Rayon : " . $this->rayon . 
                "<br>Circonférence : " . $this->circonference() . 
                "<br>Aire : " . $this->aire() . 
                "<br>Diamètre : " . $this->diametre();
        
    }

    public function circonference(){
        return ($this->rayon*2) * 3.14;
    }

    public function aire(){
        return 3.14 * pow($this->rayon, 2);
         // Aire = pi * r^2
    }

    public function diametre(){
        return $this->rayon * 2;
       
    }

}

$cercle1 = New Cercle(4);
echo "Infos CERCLE1:<br>";
echo $cercle1->afficherinfos()."<br>";
echo "Circonference:<br>";
echo $cercle1->circonference()."<br>";
echo "Aire:<br>";
echo $cercle1->aire()."<br>";
echo "Diametre:<br>";
echo $cercle1->diametre()."<br>";
"<br>";
$cercle2 = New Cercle(7);
echo "Infos CERCLE2:<br>";
echo $cercle2->afficherinfos()."<br>";
echo "Circonference:<br>";
echo $cercle2->circonference()."<br>";
echo "Aire:<br>";
echo $cercle2->aire()."<br>";
echo "Diametre:<br>";
echo $cercle2->diametre()."<br>";
?>
