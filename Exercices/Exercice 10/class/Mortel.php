<?php

Abstract class Mortel extends Entite {
    protected $pointsDeVie;
    protected $force;
    protected $intelligence;
    protected $agilite;

    function setPointsDeVie (int $pointsDeVie) {
        $this->pointsDeVie = $pointsDeVie;
    }

    function getPointsDeVie () {
        return $this->pointsDeVie;
    }

    function setForce (int $force) {
        $this->force = $force;
    }

    function getForce () {
        return $this->force;
    }

    function setIntelligence (int $intelligence) {
        $this->intelligence = $intelligence;
    }

    function getIntelligence () {
        return $this->intelligence;
    }

    function setAgilite (int $agilite) {
        $this->agilite = $agilite;
    }

    function getAgilite () {
        return $this->agilite;
    }

    function attaquer (Mortel $cible) {
        if (rand(1, 100) < $cible->getAgilite() || (is_a($cible, 'Elfe') && rand(1, 100) < $cible->getEsquive())) {
            echo $cible->getNom() . " à esquivé l'attaque !<br/>";
        }
        else {
            $degats = rand(-2, 2) + $this->force;
            $cible->setPointsDeVie($cible->getPointsDeVie() - $degats);
            echo $cible->getNom() . " perd " . $degats . " points de vie !<br/>";
        }
    }
}