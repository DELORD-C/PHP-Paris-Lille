<?php

include('class/Autoloader.php');
$affichage = new Affichage('Connection');
$auth = new Auth();
$bdd = new Bdd();

if ($auth->isConnected($bdd)) {
    header('location: home.php');
}

$affichage->display('Header');
$affichage->display('Connection');
$affichage->display('Footer');

?>