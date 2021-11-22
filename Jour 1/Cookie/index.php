<?php 

if (!empty($_GET['cookie'])) {
    if (!empty($_COOKIE['nbCookies'])) {
        $nbcookies = intval($_COOKIE['nbCookies']) + 1;
    }
    else {
        $nbcookies = 1;
    }
    setcookie('nbCookies', $nbcookies, time() + (60*60*24));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <a href='?cookie=1'>Ajouter un cookie</a>
    <p>Vos cookies : <?=$_COOKIE['nbCookies']?></p>
</body>
</html>