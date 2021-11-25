<?php

class Affichage {

    private $header;
    private $footer;
    private $disconnect;
    private $filmsList;
    private $formulaireConnection;

    function __construct(string $titre)
    {
        $this->setHeader($titre);
        $this->setFooter();
        $this->setDisconnect();
        $this->setFormulaireConnection();
    }

    function display (string $bloc) {
        switch ($bloc) {
            case 'Header':
                echo $this->getHeader();
                break;
            case 'Footer':
                echo $this->getFooter();
                break;
            case 'Connection':
                echo $this->getFormulaireConnection();
                break;
            case 'Films':
                echo $this->getFilmsList();
                break;
            case 'Disconnect':
                echo $this->getDisconnect();
                break;

            default:     
                break;
        }
    }

    function setHeader (string $titre) {
        $this->header = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>' . $titre . '</title>
        </head>
        <body>';
    }

    function getHeader () {
        return $this->header;
    }

    function setFooter () {
        $this->footer = '</body>
        </html>';
    }

    function getFooter () {
        return $this->footer;
    }

    function setFormulaireConnection() {
        $this->formulaireConnection = "
            <form method='post' action='home.php'>
                <input type='text' name='email' placeholder='Email'>
                <input type='password' name='password' placeholder='Password'>
                <input type='submit' value='Connection'>
            </form>
        ";
    }

    function getFormulaireConnection() {
        return $this->formulaireConnection;
    }

    function setFilmsList (Bdd $bdd) {
        $films = $bdd->getFilmsList();
        $this->filmsList = '<div class="films">';
        foreach ($films as $index => $film) {
            $this->filmsList .= "
                <h2>" . $film['titre'] . "</h2>
                <p>" . $film['realisateurs'] . "</p>
                <p>" . $film['annee'] . "</p>
            ";
        }
        $this->filmsList .= '</div>';
    }

    function getFilmsList () {
        return $this->filmsList;
    }

    function setDisconnect () {
        $this->disconnect = "<a href='?disconnect=true'>Déconnection</a>";
    }

    function getDisconnect () {
        return $this->disconnect;
    }

}