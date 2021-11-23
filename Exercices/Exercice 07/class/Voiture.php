<?php

class Voiture {
    public $acceleration;
    public $marque;
    public $vitesse = 0;

    function __construct($marque, $acceleration)
    {
        $this->acceleration = $acceleration;
        $this->marque = $marque;
    }

    function accelere() {
        $this->vitesse += $this->acceleration;
        // $this->vitesse = $this->vitesse + $this->acceleration;//Même chose que la ligne du dessus
        echo "$this->marque accélère jusqu'à $this->vitesse" . "km/h<br/>";
    }
}