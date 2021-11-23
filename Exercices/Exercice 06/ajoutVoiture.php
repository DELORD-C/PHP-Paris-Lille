<?php

if (empty($_POST)) {
    header('location: formulaireVoiture.php');
}

include('bdd.php');

$query = $pdo->prepare("INSERT INTO voitures (immatriculation, marque, cylindree, dateachat) VALUES ('?', '?', '?', '?')");
$query->bindParam(1, $_POST['immatriculation']);
$query->bindParam(2, $_POST['marque']);
$query->bindParam(3, $_POST['cylindree']);
$query->bindParam(4, $_POST['dateachat']);
$query->execute();
header('location: formulaireVoiture.php');