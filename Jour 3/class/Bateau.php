<?php

class Bateau extends Vehicule {
    function couler () {
        echo $this->nom . " à coulé.";
    }
}