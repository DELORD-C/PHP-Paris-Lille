<?php

Class Bdd {
    static function getPDO () {
        return new PDO('mysql:host=localhost;dbname=php-paris-lille', 'root', '');
    }

    static function checkPassword (string $email, string $password) {
        $query = Bdd::getPDO()->prepare("SELECT * FROM users WHERE email = ?");
        $query->bindParam(1, $email);
        $query->execute();
        $resultat = $query->fetch();
        if (!empty($resultat) && $resultat['password'] == $password) {
            return true;
        }
        return false;
    }

    static function getFilmsList () {
        $query = Bdd::getPDO()->prepare("SELECT * FROM films LIMIT 5");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}