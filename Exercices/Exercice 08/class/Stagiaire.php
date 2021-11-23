<?php

class Stagiaire {
    private $nom;
    private $notes;

    function __construct (string $nom, array $notes)
    {
        $this->nom = $nom;
        $this->notes = $notes;
    }

    function setNom (string $nom) {
        $this->nom = $nom;
    }

    function getNom () {
        return $this->nom;
    }

    function setNotes (array $notes) {
        $this->notes = $notes;
    }

    function getNotes () {
        return $this->notes;
    }

    function calculerMoyenne () {
        $total = 0;
        foreach ($this->notes as $index => $note) {
            $total += $note;
        }
        return ($total / count($this->notes));
    }

    function trouverMax () {
        $max = 0;
        foreach ($this->notes as $index => $note) {
            if ($note > $max) {
                $max = $note;
            }
        }
        return $max;
    }

    function trouverMin () {
        $min = false;
        foreach ($this->notes as $index => $note) {
            if ($min == false || $note < $min) {
                $min = $note;
            }
        }
        return $min;
    }
}