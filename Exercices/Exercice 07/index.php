<?php

include('class/Voiture.php');

$voiture = new Voiture ('Mercedes', 20);
$voiture->accelere();
$voiture->accelere();

// Mercedes accelère jusqu'à 20km/h<br/>
// Mercedes accelère jusqu'à 40km/h