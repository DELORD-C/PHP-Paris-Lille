<?php

if (empty($_POST)) {
    header('location: formulaireClient.php');
}

include('bdd.php');

foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
}

if(empty($_POST['assurance'])) {
    $assurance = 0;
}
else {
    $assurance = 1;
}

$query = $pdo->prepare("INSERT INTO locations (idclient, immatriculation, datedebut, datefin, daterentree, assurance) VALUES ('" . $_POST['idclient'] . "', '" . $_POST['immatriculation'] . "', '" . $_POST['datedebut'] . "', '" . $_POST['datefin'] . "', '" . $_POST['daterentree'] . "', '" . $assurance . "')");
$query->execute();
header('location: formulaireClient.php');