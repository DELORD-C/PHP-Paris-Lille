<?php

include('class/Adresse.php');
include('class/Personne.php');
include('class/ListePersonnes.php');

$adresse1 = new Adresse('chemin des Lilas', 'Lyon', '95612');
$adresse2 = new Adresse('chemin du prés', 'Geugnon', '54023');
$adresse3 = new Adresse('Rue du Général de Gaulle', 'Paris', '01052');
$adresse4 = new Adresse('chemin du test', 'Test', '01001');
$adresse5 = new Adresse('Avenue du Général de Gaulle', 'Paris', '01053');

$personne1 = new Personne('David', 'M', [$adresse1, $adresse2, $adresse5]);
$personne2 = new Personne('Marie', 'F', [$adresse3, $adresse4]);

$listePersonnes = new ListePersonnes ([$personne1, $personne2]);

// echo '<pre>';
// $listePersonnes->editPersonneNom('David', 'Pierre');
// $listePersonnes->editPersonneVille('Pierre', 'Marseille');
// var_dump($listePersonnes);
// echo '</pre>';