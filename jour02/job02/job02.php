<?php

class Livre{

    private $titre;
    private $auteur;
    private $nombre_de_pages;

    public function __construct($titre, $auteur, $nombre_de_pages){
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->setNombre_de_pages($nombre_de_pages); 
    }

    public function setTitre($newTitre){
        $this->titre = $newTitre;
        
    }
    public function setAuteur($newAuteur){
        $this->auteur = $newAuteur;

    }
    public function setNombre_de_pages($newNombre_de_pages) {
        if ($newNombre_de_pages > 0 && (int)$newNombre_de_pages == $newNombre_de_pages) {
            $this->nombre_de_pages = $newNombre_de_pages;
        } else {
            echo "Erreur : Le nombre de pages doit être un entier et supérieur à 0 ou un nombre entier.<br>";
        }
    }
  
    public function getTitre(){
        return $this->titre."<br>";
        
    }
    public function getAuteur(){
        return $this->auteur."<br>";

    }
    public function getNombre_de_pages(){
        return $this->nombre_de_pages."<br>";
      

    }
}

$livre = New Livre("Dragon Ball", "Akira Toriyama", 200);
echo "Titre initial: ";
echo $livre->getTitre()."<br>";
echo "Auteur initial: ";
echo $livre->getAuteur()."<br>";
echo "Nombre de pages initiales: ";
echo $livre->getNombre_de_pages()."<br>";

$livre->setTitre("Akira")."<br>";
$livre->setAuteur("Katsuhiro Otomo")."<br>";
$livre->setNombre_de_pages(155)."<br>";

echo "Nouveau Titre: ";
echo $livre->getTitre()."<br>";
echo "Nouvel Auteur: ";
echo $livre->getAuteur()."<br>";
echo "Nouveau Nombre de pages: ";
echo $livre->getNombre_de_pages()."<br>";
?>
