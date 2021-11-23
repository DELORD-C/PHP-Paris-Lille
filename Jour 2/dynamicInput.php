<?php
$pdo = new PDO('mysql:host=localhost;dbname=php-paris-lille', 'root', '');
$query =$pdo->prepare("SELECT * FROM clients");
$query->execute();
$clients = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<label for="idclient">Client</label>
<select name="idclient" id="idclient">
    <?php foreach ($clients as $key => $client) { ?>
        <option value="<?=$client['id']?>"><?=$client['nom']?> <?=$client['prenom']?></option>
    <?php } ?>
</select>