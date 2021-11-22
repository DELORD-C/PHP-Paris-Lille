<?php

session_start();

if (!empty($_POST)) {
/////////////////
    //CODE
/////////////////
    $_SESSION['connected'] = 'true';
    if (!empty($_COOKIE['lastConnect'])) {
        $lastConnect = $_COOKIE['lastConnect'];
    }
    setcookie('Connect-' . time(), time(), time() + (60*60*24*7), '/');
}

if (!empty($_SESSION['connected'])) {
    echo "Bonjour<br/>";
    if (!empty($lastConnect)) {
        $date = new DateTime();
        $date->setTimestamp($lastConnect);
        echo $date->format('d-m-Y H:i:s') . "\n";
    }
}
else {
    header('location: index.php');
}