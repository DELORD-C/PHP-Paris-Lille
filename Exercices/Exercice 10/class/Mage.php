<?php

class Mage extends Humain {
    protected $force = 4;
    protected $intelligence = 19;
    protected $agilite = 7;

    function sheep (Entite $cible) {
        echo $cible->nom . " est transformé en mouton !<br/>";
    }

    function attaquer (Mortel $cible) {
        if (is_a($cible, 'Elfe') && rand(1, 100) < $cible->getEsquive()) {
            echo $cible->getNom() . " à esquivé l'attaque !<br/>";
        }
        else {
            $degats = rand(-2, 2) + $this->intelligence;
            $cible->setPointsDeVie($cible->getPointsDeVie() - $degats);
            echo $cible->getNom() . " perd " . $degats . " points de vie !<br/>";
        }
    }
}