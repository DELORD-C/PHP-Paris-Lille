<?php

Abstract class Entite {
    protected $nom;
    protected $dimension;
    protected $age;

    function __construct(string $nom, string $dimension, int $age)
    {
        $this->nom = $nom;
        $this->dimension = $dimension;
        $this->age = $age;
    }

    function setNom (string $nom) {
        $this->nom = $nom;
    }

    function getNom () {
        return $this->nom;
    }

    function setDimension (string $dimension) {
        $this->dimension = $dimension;
    }

    function getDimension () {
        return $this->dimension;
    }

    function setAge (int $age) {
        $this->age = $age;
    }

    function getAge () {
        return $this->age;
    }
}