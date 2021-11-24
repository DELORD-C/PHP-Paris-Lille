<?php

class Affichage {

    private $formulaireConnection;
    private $header;
    private $footer;

    function __construct(string $titre)
    {
        $this->setFormulaireConnection();
        $this->setHeader($titre);
        $this->setFooter();
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

}