<?php

if (empty($_POST)) {
    header('location: formulaireClient.php');
}

include('bdd.php');

foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
}

$query = $pdo->prepare("INSERT INTO clients (nom, prenom, codepostal, localite, rue, numero, telephone, email) VALUES ('" . $_POST['nom'] . "', '" . $_POST['prenom'] . "', '" . $_POST['codepostal'] . "', '" . $_POST['localite'] . "', '" . $_POST['rue'] . "', '" . $_POST['numero'] . "', '" . $_POST['telephone'] . "', '" . $_POST['email'] . "')");
$query->execute();
header('location: formulaireClient.php');