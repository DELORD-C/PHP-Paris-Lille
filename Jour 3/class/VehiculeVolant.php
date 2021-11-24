<?php

class VehiculeVolant extends Vehicule {
    
    function atterrir () {
        echo $this->nom . " vient d'atterrir.";
    }

}