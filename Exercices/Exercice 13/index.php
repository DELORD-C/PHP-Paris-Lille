<?php

function pair(int $nb) {
    return is_int($nb/2) ? true : false;
}

// var_dump(pair(8));
// var_dump(pair(33));

function lettre(int $nb) {
    if ($nb > 0 && $nb < 10) {
        switch ($nb) {
            case 1:
                return 'Un';
            case 2:
                return 'Deux';
            case 3:
                return 'Trois';
            case 4:
                return 'Quatre';
            case 5:
                return 'Cinq';
            case 6:
                return 'Six';
            case 7:
                return 'Sept';
            case 8:
                return 'Huit';
            case 9:
                return 'Neuf';
        }
    }
    else {
        throw new Exception('paramètre attendu : chiffre entre 1 et 9');
    }
}

var_dump(lettre(9));
var_dump(lettre(2));
var_dump(lettre(11));