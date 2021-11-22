<?php


function dump ($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

session_start(); //Démarre la session (initialise les variables en recréant celles déjà connues);
session_destroy(); //Détruit la session (supprime toutes les variables) puis la stop
// unset($_SESSION['test']); //Supprimer une variable

// $_SESSION['test2'] = 'ok'; // Définir manuellement une variable de session

// dump($_SESSION);





// foreach ($_COOKIE as $key) {
//     unset($_COOKIE[$key]);
// }
dump($_COOKIE);