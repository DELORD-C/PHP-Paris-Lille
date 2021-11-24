<?php

include('class/Autoloader.php');

$mage = new Mage('Gandalf', 'Terre', 850);
$guerrier = new Guerrier('Gimli', 'Terre', 45);
$voleur = new Voleur('Legolas', 'Terre', 310);

$mage->attaquer($guerrier);
$guerrier->attaquer($voleur);

echo '<pre>';
var_dump($mage);
var_dump($voleur);
var_dump($guerrier);
echo '</pre>';