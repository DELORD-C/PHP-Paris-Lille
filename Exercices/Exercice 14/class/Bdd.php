<?php

Class Bdd {
    static function getPDO () {
        return new PDO('mysql:host=localhost;dbname=php-paris-lille', 'root', '');
    }

    
}