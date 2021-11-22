<?php

session_start();
$mdp = 'admin';
$nom = 'admin';

if (!empty($_GET) && $_GET['dc'] == 'true') {
    session_destroy();
}

if (!empty($_POST) && $_POST['nom'] == $nom && $_POST['mdp'] == $mdp) {
    $_SESSION['nom'] = $_POST['nom'];
}

if (!empty($_SESSION['nom'])) {
    echo 'Bonjour ' . $_SESSION['nom'];
    echo '<br/>';
    echo '<a href="?dc=true">Deconnexion</a>';

}
else {
    header('location: index.php');
}