<?php

if (empty($_POST)) {
    header('location: formulaireVoiture.php');
}

include('bdd.php');

foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
}

$query = $pdo->prepare("INSERT INTO voitures (immatriculation, marque, cylindree, dateachat) VALUES ('" . $_POST['immatriculation'] . "', '" . $_POST['marque'] . "', '" . $_POST['cylindree'] . "', '" . $_POST['dateachat'] . "')");
$query->execute();
header('location: formulaireVoiture.php');