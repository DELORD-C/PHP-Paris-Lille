<?php

include('class/Voiture.php');

$voiture1 = new Voiture ('Renault', '90', '45IKJD95', '10-16-2018');
$voiture2 = new Voiture ('Mercedes', '90', '45IKJD95', '10-16-2018');

// echo '<pre>';
// var_dump($voiture1);
// echo '</pre>';

$voiture1->accélérer();
$voiture2->accélérer();