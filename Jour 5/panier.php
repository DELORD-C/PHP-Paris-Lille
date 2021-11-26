<?php

    if (!empty($_COOKIE['panier'])) {
        $cookieProducts = explode('l', $_COOKIE['panier']);
        $produits = [];
        foreach($cookieProducts as $index => $produit) {
            $infos = explode('x', $produit);
            $produits[$infos[0]] = $infos[1];
        }
    }
    else {
        $produits = [];
    }

    echo '<pre>';
    var_dump($produits);
    echo '</pre>';

    if (!empty($_POST['panier'])) {
        if (isset($produits[$_POST['panier']])) {
            $produits[$_POST['panier']]++;
        }
        else {
            $produits[$_POST['panier']] = 1;
        }
    }

    if (!empty($_POST['moinspanier'])) {
        if (isset($produits[$_POST['moinspanier']])) {
            if ($produits[$_POST['moinspanier']] <= 1) {
                unset($produits[$_POST['moinspanier']]);
            }
            else {
                $produits[$_POST['moinspanier']]--;
            }
        }
    }

    $newCookie = '';
    foreach ($produits as $key => $value) {
        $newCookie .= $key . 'x' . $value . 'l';
    }
    $newCookie = substr($newCookie, 0, -1);
    setcookie('panier', $newCookie, time() + (60*60*24*7*4));
    $pdo = new PDO('mysql:host=localhost;dbname=php-paris-lille', 'root', '');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id='panier'>
        <?php

        foreach ($produits as $id => $nombre) {
            $query = $pdo->prepare('SELECT * FROM articles WHERE id = ?');
            $query->bindParam(1, $id);
            $query->execute();
            $result =$query->fetch(PDO::FETCH_ASSOC); ?>
            <form method='post'>
                <p><?=$result['nom']?></p>
                <p>x<?=$nombre?></p>
                <input type="hidden" value="<?=$result['id']?>" name="moinspanier">
                <input type="submit" value="Retirer 1 du panier">
            </form>
        <?php }

        ?>
    </div>
    <div id='articlesList'>
        <?php
            $query = $pdo->prepare('SELECT * FROM articles');
            $query->execute();
            foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $index => $article) {
                ?>
                <form method="post">
                    <h2><?=$article['nom']?></h2>
                    <p><?=$article['prix']?></p>
                    <input type="hidden" value="<?=$article['id']?>" name="panier">
                    <input type="submit" value="Ajouter au panier">
                </form>
                <?php
            }

        ?>
    </div>    
</body>
</html>