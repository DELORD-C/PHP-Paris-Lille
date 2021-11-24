<?php

class ListePersonnes {
    private $personnes;

    function __construct (array $personnes) {
        if (count($personnes) < 10) {
            foreach ($personnes as $index => $personne) {
                if (!is_a($personne, 'Personne')) {
                    throw new Exception("Seul des objets de la classe 'Personne' sont acceptés.", 1);
                }
            }
            $this->personnes = $personnes;
        }
    }

    function findByNom (string $s) {
        foreach ($this->personnes as $index => $personne) {
            if ($personne->getNom() == $s) {
                return $personne;
            }
        }
    }

    function findByCodePostal (string $cp) {
        foreach ($this->personnes as $index => $personne) {
            foreach ($personne->getAdresses() as $indexA => $adresse) {
                if ($adresse->getCodePostal() == $cp) {
                    return true;
                }
            }
        }
        return false;
    }

    function countPersonneVille (string $ville) {
        $compteur = 0;
        foreach ($this->personnes as $index => $personne) {
            foreach ($personne->getAdresses() as $indexA => $adresse) {
                if ($ville == $adresse->getVille()) {
                    $compteur++;
                    break;
                }
            }
        }
        return $compteur;
    }

    function editPersonneNom (string $oldNom, string $newNom) {
        foreach ($this->personnes as $index => $personne) {
            if ($oldNom == $personne->getNom()) {
                $personne->setNom($newNom);
            }
        }
    }

    function editPersonneVille (string $nom, string $newVille) {
        foreach ($this->personnes as $index => $personne) {
            if ($nom == $personne->getNom()) {
                foreach ($personne->getAdresses() as $indexA => $adresse) {
                    $adresse->setVille($newVille);
                }
            }
        }
    }

}