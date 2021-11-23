<?php

class Voiture {
    private $marque;
    private $cylindree;
    private $immatriculation;
    private $dateachat;

    function __construct (string $marque, $cylindree, $immatriculation, $dateachat)
    {
        $this->marque = $marque;
        $this->cylindree = $cylindree;
        $this->immatriculation = $immatriculation;
        $this->dateachat = $dateachat;
    }

    function accélérer() {
        echo "La " . $this->marque . " accélère.";
    }

    function setMarque (string $marque) {
        $this->marque = $marque;
    }

    function getMarque () {
        return $this->marque;
    }
}