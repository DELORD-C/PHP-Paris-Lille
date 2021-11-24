<?php

include('class/Autoloader.php');

$avion = new Avion ('Avion', 5, 50, 'Boeing');
$bateau = new Bateau ('Bateau', 5, 3, 'Costa');
$helico = new Helicoptere ('Helico', 50, 20, 'Helis');
$moto = new Moto ('Moto', 30, 30, 'Suzuki');
$voiture = new Voiture ('Voiture', 20, 20, 'Mercedes', 5);

$vehicules = [$avion, $bateau, $helico, $moto, $voiture];

echo '<pre>';
$moto->accélérer();
$moto->wheeling();
echo '</pre>';