<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    if (!empty($_GET['error'])) {
        echo '<span>' . $_GET['error'] . '</span>';
    }

    ?>
    <form action="connect.php" method='post'>
        <input type="text" name="email" placeholder="email">
        <input type="password" name="mdp" placeholder="mdp">
        <input type="submit" value="Connexion">
    </form>
</body>
</html>