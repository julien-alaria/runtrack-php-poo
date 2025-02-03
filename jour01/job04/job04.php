<?php
class Point{

    public $x;
    public $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function afficherLesPoints() {
        echo $this->x."<br>";
        echo $this->y."<br>";

    }

    public function afficherX() {
        echo $this->x."<br>";

    }

    public function afficherY() {
        echo $this->y."<br>";

    }

    public function changerX($newX) {
        $this->x = $newX;

    }

    public function changerY($newY) {
        $this->y = $newY;

    }
}
$X = new Point(5, 6);

echo $X->afficherLesPoints();
echo $X->afficherX();
echo $X->afficherY();
$X->changerX(8);
$X->changerY(10);
echo $X->afficherLesPoints();
?>
