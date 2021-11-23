<?php

$pdo = new PDO('mysql:host=localhost;dbname=php-paris-lille', 'root', '');


$query = $pdo->prepare("INSERT INTO clients (nom, prenom, codepostal, localite, rue, numero, telephone, email) VALUES ('?', '?', '?', '?', '?', '?', '?', '?')");
$query->bindParam(1, $_POST['nom']);
$query->bindParam(2, $_POST['prenom']);
$query->bindParam(3, $_POST['codepostal']);
$query->bindParam(4, $_POST['localite']);
$query->bindParam(5, $_POST['rue']);
$query->bindParam(6, $_POST['numero']);
$query->bindParam(7, $_POST['telephone']);
$query->bindParam(8, $_POST['email']);
$query->execute();