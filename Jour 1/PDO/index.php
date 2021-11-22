<?php
function dump ($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

// $type = 'mysql';
// $server = 'localhost';
// $user = 'root';
// $pass = '';
// $db = 'php-paris-lille';

// $pdo = new PDO("$type:host=$server" . "dbname=$db", $user, $pass);


$pdo = new PDO('mysql:host=localhost;dbname=php-paris-lille', 'root', ''); //Creation de l'objet PDO qui se connect à la base de donnée

// $query = $pdo->prepare("SELECT * FROM users"); // preparation de la requete sql
// $query->execute(); // execution de la requète
// $results = $query->fetchAll(PDO::FETCH_ASSOC); //récupération, analyse et mise en forme des résultas



//RAPPEL REQUETES SQL
// $query = $pdo->prepare("SELECT * FROM users WHERE email = 'admin@aol.fr'"); // condition égal (ou autre opérateur classique : < <= > >= != =)
// $query = $pdo->prepare("SELECT * FROM users WHERE email IN ('admin@aol.fr', 'test@aol.fr', 'etc@aol.fr)"); // IN sert à véfifier qu'une valeur fait parti d'un tableau
// $query = $pdo->prepare("SELECT * FROM users WHERE email LIKE '%admin%'"); //LIKE permet de rechercher un schéma ex : tout les mails qui contiennent 'admin' s'écrira : LIKE '%admin%'
// $query = $pdo->prepare("SELECT * FROM users WHERE lastconnect BETWEEN "); //BETWEEN sert à vérifier qu'une valeur se trouve entre deux autres
// $query = $pdo->prepare("SELECT * FROM users WHERE email NOT IN ('admin@aol.fr', 'test@aol.fr', 'etc@aol.fr)"); // NOT permet d'inverser la condition qui le suit
// $query = $pdo->prepare("SELECT * FROM users WHERE email = 'admin@aol.fr' AND password = 'admin'"); // AND et OR permettent de cumuler des conditions.
// $query = $pdo->prepare("INSERT INTO users (email, password, lastconnect) VALUES ('manuel@aol.fr', 'pass', '" . date('Y-m-d H:i:s') . "')"); // INSERT INTO (colonne1, colonne2, etc.) VALUES (valeur1, valeur2, etc.) sert à insérer une ligne dans une table
// $query = $pdo->prepare("UPDATE users SET email = 'manuel@aol.com'"); // UPDATE sert à modifier une ou plusieurs lignes existante(s)
// $query = $pdo->prepare("DELETE FROM users WHERE email LIKE 'manuel%'");
// $query->execute();
// $results = $query->fetch(PDO::FETCH_ASSOC);
// dump($results);