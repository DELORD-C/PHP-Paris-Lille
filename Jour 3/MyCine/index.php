<?php

include('class/Autoloader.php');
$affichage = new Affichage('Connection');

$affichage->display('Header');
$affichage->display('Connection');
$affichage->display('Footer');

?>