<?php

class Moto extends Vehicule {

    function wheeling () {
        if ($this->vitesse > 0) {
            echo $this->nom . " lève sa roue avant !";
        }
    }

}