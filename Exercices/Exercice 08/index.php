<?php

include('class/Formation.php');
include('class/Stagiaire.php');

$vincent = new Stagiaire('Vincent', [13, 8, 5, 19, 17, 5, 6]);
$david = new Stagiaire('David', [16, 10, 8, 17, 18, 15, 8]);
$kevin = new Stagiaire('Kevin', [9, 5, 3, 12, 10, 3, 4]);
$formation = new Formation('PHP POO', 5, [$vincent, $david, $kevin]);

// echo "<p>" . $vincent->trouverMin() . "</p>";
// echo "<p>" . $david->trouverMin() . "</p>";
// echo "<p>" . $kevin->trouverMin() . "</p>";

// $formation->trouverMoyenneParNom('David');