<?php

Class Bdd {
    static function getPDO () {
        return new PDO('mysql:host=localhost;dbname=php-paris-lille', 'root', '');
    }

    static function search (string $str) {
        $words = explode(' ', $str);
        if (count($words) > 1) {
            $construct = '';
            foreach ($words as $index => $word) {
                $construct .= "nom LIKE '%" . $word . "%' AND ";
            }
            $construct = substr($construct, 0, -4);
            $query = Bdd::getPDO()->prepare("SELECT * FROM france_rue WHERE $construct");
        }
        else {
            $str = "%$str%";
            $query = Bdd::getPDO()->prepare("SELECT * FROM france_rue WHERE nom LIKE ?");
            $query->bindParam(1, $str);
        }
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}