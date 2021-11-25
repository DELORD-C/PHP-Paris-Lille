<?php

Class Bdd {
    private $pdo;

    function __construct () {
        $this->pdo = new PDO('mysql:host=localhost;dbname=php-paris-lille', 'root', '');
    }

    function checkPassword (string $email, string $password) {
        $query = $this->pdo->prepare("SELECT * FROM users WHERE email = ?");
        $query->bindParam(1, $email);
        $query->execute();
        $resultat = $query->fetch();
        if (!empty($resultat) && $resultat['password'] == $password) {
            return true;
        }
        return false;
    }

    function getFilmsList () {
        $query = $this->pdo->prepare("SELECT * FROM films");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}