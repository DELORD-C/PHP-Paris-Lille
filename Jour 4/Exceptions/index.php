<?php

ini_set('display_errors', 1); //Permet d'afficher toutes les erreurs PHP
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pdo = new PDO('mysql:host=localhost;dbname=php-paris-lille', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Permet d'afficher les erreurs SQL (si on les catch)
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); //Permet aux erreurs SQL d'arréter totalement l'execution du script php
try { // Try catch permet de récupérer les éventuelles erreurs lors de l'execution du code que l'on place dans le bloc try
    $query = $pdo->prepare("SELECT * FROM users WHERE emails = 'admin@aol.fr'");
    $query->execute();
} catch (Exception $e) { // On peut spécifier le type d'erreur que l'on veut attraper dans le bloc catch
    // var_dump($e);
}

// throw(new Exception("Erreur, il n'y a rien sur cette page"));

function inverse (int $nbr) {
    if ($nbr == 0) {
        throw new Exception('Division par zéro impossible.'); //thrown permet d'envoyer une nouvelle exception à PHP
    }
    return 1/$nbr;
}

try {
    echo inverse(0);
} catch (Exception $e) {
    var_dump($e);
}

echo 'terminé';