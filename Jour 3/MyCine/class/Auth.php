<?php

class Auth {

    function __construct () {
        session_start();
    }

    function isConnected () {
        if (!empty($_SESSION['connected'])) {
            return true;
        }
        return false;
    }
    
}