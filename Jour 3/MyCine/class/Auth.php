<?php

class Auth {

    function __construct () {
        session_start();
    }

    function isConnected (Bdd $bdd) {
        if (!empty($_SESSION['connected'])) {
            if (!empty($_GET['disconnect']) && $_GET['disconnect'] == 'true') {
                session_destroy();
                header('location: index.php');
            }
            return true;
        }
        else if (!empty($_POST) && $bdd->checkPassword($_POST['email'], $_POST['password'])) {
            $_SESSION['connected'] = 'true';
            header('Refresh: 0');
        }
        return false;
    }

}