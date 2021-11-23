<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une voiture</title>
</head>
<body>
    <form action="ajoutVoiture.php" method='post'>
        <input type="text" name="immatriculation" placeholder="Immatriculation" required>
        <input type="text" name="marque" placeholder="Marque" required>
        <label for="cylindree">Cylindrée (Ch)</label>
        <input type="number" id="cylindree" name="cylindree" required min="1" step="1">
        <input type="date" name="dateachat" required>
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>