<?php

class Personne {
    private $nom;
    private $sexe;
    private $adresses;

    function __construct (string $nom, string $sexe, array $adresses) {
        if ($sexe == 'M' || $sexe == 'F') {
            $this->sexe = $sexe;
        }
        else {
            throw new Exception("'M' ou 'F' attendu pour le paramètre \$sexe", 1);
        }
        $this->nom = $nom;
        $this->adresses = $adresses;
    }

    function setNom (string $nom) {
        $this->nom = $nom;
    }

    function getNom () {
        return $this->nom;
    }

    function setSexe (string $sexe) {
        if ($sexe == 'M' || $sexe == 'F') {
            $this->sexe = $sexe;
        }
        else {
            throw new Exception("'M' ou 'F' attendu pour le paramètre \$sexe", 1);
        }
    }

    function getSexe () {
        return $this->sexe;
    }

    function setAdresses (string $adresses) {
        $this->adresses = $adresses;
    }

    function getAdresses () {
        return $this->adresses;
    }
}