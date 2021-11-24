<?php

include('class/Autoloader.php');
$affichage = new Affichage('Accueil');
$auth = new Auth();

if ($auth->isConnected()) {
    $affichage->display('Header');
    
    $affichage->display('Footer');
} else {
    
    header('location: index.php');
}
