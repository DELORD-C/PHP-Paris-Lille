<?php

class Voiture {
    private $nom;

    function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    static function vroom () {
        echo "Vroom vroom !<br/>";
    }

    function vroum () {
        echo $this->nom . " vroum vroum !<br/>";
    }
}