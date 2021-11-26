<?php

class Affichage {
    static function display (string $bloc) {
        switch ($bloc) {
            case 'Header':
                echo Affichage::getHeader();
                break;
            case 'Footer':
                echo Affichage::getFooter();
                break;
            case 'Connection':
                echo Affichage::getConnection();
                break;
            case 'Films':
                echo Affichage::getFilmsList();
                break;
            case 'Disconnect':
                echo Affichage::getDisconnect();
                break;

            default:     
                break;
        }
    }

    static function getHeader () {
        return '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>My Ciné</title>
        </head>
        <body>';
    }

    static function getFooter () {
        return '</body>
        </html>';
    }

    static function getConnection() {
        return "
            <form method='post' action='home.php'>
                <input type='text' name='email' placeholder='Email'>
                <input type='password' name='password' placeholder='Password'>
                <input type='submit' value='Connection'>
            </form>
        ";
    }

    static function getFilmsList () {
        $films = Bdd::getFilmsList();
        $filmList = '<div class="films">';
        foreach ($films as $index => $film) {
            $filmList .= "
                <h2>" . $film['titre'] . "</h2>
                <p>" . $film['realisateurs'] . "</p>
                <p>" . $film['annee'] . "</p>
                <img src=" . Api::getMoviePoster($film['titre']) . ">
            ";
        }
        $filmList .= '</div>';
        return $filmList;
    }

    static function getDisconnect () {
        return "<a href='?disconnect=true'>Déconnection</a>";
    }
}