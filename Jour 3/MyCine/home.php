<?php

include('class/Autoloader.php');
$affichage = new Affichage('Accueil');
$auth = new Auth();
$bdd = new Bdd();

if ($auth->isConnected($bdd)) {
    $affichage->display('Header');
    $affichage->display('Disconnect');
    $affichage->setFilmsList($bdd);
    $affichage->display('Films');
    $affichage->display('Footer');
} else {
    header('location: index.php');
}