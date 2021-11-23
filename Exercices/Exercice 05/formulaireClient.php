<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Client</title>
</head>
<body>
    <form action="ajoutClient.php" method='post'>
        <input type="text" name="nom" placeholder="Nom" required>
        <input type="text" name="prenom" placeholder="Prénom" required>
        <input type="text" name="codepostal" placeholder="Code Postal" required>
        <input type="text" name="localite" placeholder="Localité" required>
        <input type="text" name="rue" placeholder="Rue" required>
        <label for="numero">Numéro</label>
        <input type="number" id="numero" name="numero" required min="1" step="1">
        <input type="text" name="telephone" placeholder="Téléphone" required>
        <input type="text" name="email" placeholder="Email" required>
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>