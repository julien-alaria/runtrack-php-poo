<?php
class Operation {

    public $nombre1;
    public $nombre2;
    public $nombre3;

    public function __construct($nombre1 = 7, $nombre2 = 8) {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;

    }

    public function __addition() {
        $this->nombre3 = $this->nombre1 + $this->nombre2;

    }

}

$operation = new Operation();
$operation->__addition();

echo "Nombre 1 : " . $operation->nombre1 . "<br>";
echo "Nombre 2 : " . $operation->nombre2 . "<br>";
echo "Nombre 3 : " . $operation->nombre3 . "<br>";
?>
