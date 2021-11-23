<?php

class Formation {
    private $intitulé;
    private $nbrJours;
    private $stagiaires;

    function __construct (string $intitulé, int $nbrJours, array $stagiaires)
    {
        $this->intitulé = $intitulé;
        $this->nbrJours = $nbrJours;
        $this->stagiaires = $stagiaires;
    }

    function setIntitulé (string $intitulé) {
        $this->intitulé = $intitulé;
    }

    function getIntitulé () {
        return $this->intitulé;
    }

    function setNbrJours (int $nbrJours) {
        $this->nbrJours = $nbrJours;
    }

    function getNbrJours () {
        return $this->nbrJours;
    }

    function setStagiaires (array $stagiaires) {
        $this->stagiaires = $stagiaires;
    }

    function getStagiaires () {
        return $this->stagiaires;
    }

    function calculerMoyenneFormation () {
        $total = 0;
        foreach ($this->stagiaires as $index => $stagiaire) {
            $total += $stagiaire->calculerMoyenne();
        }
        return ($total / count($this->stagiaires));
    }

    function getIndexMax () {
        $max = 0;
        $indexFinal = null;
        foreach ($this->stagiaires as $index => $stagiaire) {
            $moyenne = $stagiaire->calculerMoyenne();
            if ($max < $moyenne) {
                $max = $moyenne;
                $indexFinal = $index;
            }
        }
        return $indexFinal;
    }

    function afficherNomMax () {
        $meilleurStagiaire = null;
        foreach ($this->stagiaires as $index => $stagiaire) {
            if ($meilleurStagiaire == null || $stagiaire->calculerMoyenne() > $meilleurStagiaire->calculerMoyenne()) {
                $meilleurStagiaire = $stagiaire;
            }
        }
        echo $meilleurStagiaire->getNom();
    }

    function afficherMinMax () {
        $meilleurStagiaire = null;
        foreach ($this->stagiaires as $index => $stagiaire) {
            if ($meilleurStagiaire == null || $stagiaire->calculerMoyenne() > $meilleurStagiaire->calculerMoyenne()) {
                $meilleurStagiaire = $stagiaire;
            }
        }
        echo $meilleurStagiaire->trouverMin();
    }

    function trouverMoyenneParNom (string $nom) {
        foreach ($this->stagiaires as $index => $stagiaire) {
            if ($nom == $stagiaire->getNom()) {
                echo $stagiaire->calculerMoyenne();
            }
        }
    }
    
}