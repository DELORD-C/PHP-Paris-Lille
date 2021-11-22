<?php

session_start();

if (!empty($_GET['dc']) && $_GET['dc'] == 'true') {
    session_destroy();
    session_start();
}

if (!empty($_POST)) {

    $pdo = new PDO('mysql:host=localhost;dbname=php-paris-lille', 'root', '');
    $query = $pdo->prepare("SELECT * FROM users WHERE email = '" . $_POST['email'] . "'");
    $query->execute();
    $resultat = $query->fetch();

    if (!empty($resultat) && $resultat['password'] == $_POST['mdp']) {
        $_SESSION['connected'] = 'true';
        $query = $pdo->prepare("UPDATE users SET lastconnect = '" . date('Y-m-d H:i:s') . "' WHERE email = '" . $_POST['email'] . "'");
        $query->execute();
        header('Refresh: 0');
    }
    else {
        header('location: index.php?error=Mauvaise combinaison email/mot de passe.');
    }

}

else if (!empty($_SESSION['connected'])) {
    echo "Bonjour<br/>";
    if (!empty($lastConnect)) {
        $date = new DateTime();
        $date->setTimestamp($lastConnect);
        echo $date->format('d-m-Y H:i:s') . "\n";
    }
    echo '<a href="?dc=true">Déconnection</a>';
}
else {
    header('location: index.php?error=Vous ne pouvez pas accéder à cette page.');
}