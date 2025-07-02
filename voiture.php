<?php

class Voiture {
    public $marque;
    private $kilometrage; 

    public function rouler($km) {
        echo "La voiture roule à $km km/h.<br>";
    }
}
?>