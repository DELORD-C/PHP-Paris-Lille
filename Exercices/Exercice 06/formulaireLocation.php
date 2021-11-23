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
        <label for="idclient">Client</label>
        <input type="number" id="idclient" name="idclient" required min="1" step="1">
        <input type="text" name="immatriculation" placeholder="Immatriculation" required>
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