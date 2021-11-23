<?php

class Voiture {
    public $marque;
    public $cylindree;
    public $immatriculation;
    public $dateachat;

    function __construct ($marque, $cylindree, $immatriculation, $dateachat)
    {
        $this->marque = $marque;
        $this->cylindree = $cylindree;
        $this->immatriculation = $immatriculation;
        $this->dateachat = $dateachat;
    }

    function accélérer() {
        echo "La " . $this->marque . " accélère.";
    }
}