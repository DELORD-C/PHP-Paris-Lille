<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle Location</title>
</head>
<body>
    <form action="ajoutLocation.php" method='post'>

<?php
    $pdo = new PDO('mysql:host=localhost;dbname=php-paris-lille', 'root', '');
    $query =$pdo->prepare("SELECT * FROM clients");
    $query->execute();
    $clients = $query->fetchAll(PDO::FETCH_ASSOC);
    $query =$pdo->prepare("SELECT * FROM voitures");
    $query->execute();
    $voitures = $query->fetchAll(PDO::FETCH_ASSOC);
?>

        <label for="idclient">Client</label>
        <select name="idclient" id="idclient">
        <?php foreach ($clients as $key => $client) { ?>
            <option value="<?=$client['id']?>"><?=$client['nom']?> <?=$client['prenom']?></option>
        <?php } ?>
        </select>
        
        <label for="immatriculation">Voiture</label>
        <select name="immatriculation" id="immatriculation">
        <?php foreach ($voitures as $key => $voiture) { ?>
            <option value="<?=$voiture['immatriculation']?>"><?=$voiture['marque']?> <?=$voiture['cylindree']?> Ch</option>
        <?php } ?>
        </select>

        <label for="datedebut">Date de Début</label>
        <input type="datetime-local" id="datedebut" name="datedebut" required>
        <label for="datefin">Date de Fin</label>
        <input type="datetime-local" id="datefin" name="datefin" required>
        <label for="daterentree">Date de Rentrée</label>
        <input type="datetime-local" id="daterentree" name="daterentree" required>
        <label for="assurance">Assurance</label>
        <input type="checkbox" name="assurance" id='assurance'>
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>