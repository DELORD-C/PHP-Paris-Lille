<?php

class Voiture extends Vehicule { // Extends permet d'hériter de tous les attributs et méthodes d'une classe.
    private $nbPortes;

    function __construct(string $nom, int $acceleration, int $freinage, string $marque, int $nbPortes)
    {
        $this->nom = $nom;
        $this->acceleration = $acceleration;
        $this->freinage = $freinage;
        $this->marque = $marque;
        $this->nbPortes = $nbPortes;
    }
}