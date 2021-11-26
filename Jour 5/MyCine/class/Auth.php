<?php

class Auth {
    static function isConnected () {
        session_start();
        if (!empty($_SESSION['connected'])) {
            if (!empty($_GET['disconnect']) && $_GET['disconnect'] == 'true') {
                session_destroy();
                header('location: index.php');
            }
            return true;
        }
        else if (!empty($_POST) && Bdd::checkPassword($_POST['email'], $_POST['password'])) {
            $_SESSION['connected'] = 'true';
            header('Refresh: 0');
        }
        return false;
    }
}