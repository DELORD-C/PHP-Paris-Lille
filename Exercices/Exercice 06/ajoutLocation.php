<?php

if (empty($_POST)) {
    header('location: formulaireClient.php');
}

include('bdd.php');

if(empty($_POST['assurance'])) {
    $assurance = 0;
}
else {
    $assurance = 1;
}

$query = $pdo->prepare("INSERT INTO locations (idclient, immatriculation, datedebut, datefin, daterentree, assurance) VALUES ('?', '?', '?', '?', '?', '?')");
$query->bindParam(1, $_POST['idclient']);
$query->bindParam(2, $_POST['immatriculation']);
$query->bindParam(3, $_POST['datedebut']);
$query->bindParam(4, $_POST['datefin']);
$query->bindParam(5, $_POST['daterentree']);
$query->bindParam(6, $_POST['assurance']);
$query->execute();
header('location: formulaireClient.php');