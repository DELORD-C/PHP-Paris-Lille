<?php

Abstract class Vehicule { //Une classe abstraite ne peut pas être instanciée (new Vehicule())
    
    protected $nom; //PROTECTED EST COMME PRIVATE MAIS NE S'APPLIQUE PAS AUX ENFANTS
    protected $acceleration;
    protected $freinage;
    protected $marque;
    protected $vitesse = 0;

    function __construct(string $nom, int $acceleration, int $freinage, string $marque)
    {
        $this->nom = $nom;
        $this->acceleration = $acceleration;
        $this->freinage = $freinage;
        $this->marque = $marque;
    }

    function setNom (string $nom) {
        $this->nom = $nom;
    }

    function getNom () {
        return $this->nom;
    }

    function setAcceleration (string $acceleration) {
        $this->acceleration = $acceleration;
    }

    function getAcceleration () {
        return $this->acceleration;
    }

    function setFreinage (string $freinage) {
        $this->freinage = $freinage;
    }

    function getFreinage () {
        return $this->freinage;
    }

    function setMarque (string $marque) {
        $this->marque = $marque;
    }

    function getMarque () {
        return $this->marque;
    }

    function accélérer () {
        $this->vitesse += $this->acceleration;
        // $this->vitesse = $this->vitesse + $this->acceleration; // Fait la même chose que la ligne supérieure
    }

}