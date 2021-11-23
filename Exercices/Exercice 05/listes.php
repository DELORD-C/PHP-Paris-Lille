<?php

include('bdd.php');

$query =$pdo->prepare("SELECT * FROM clients");
$query->execute();
$clients = $query->fetchAll(PDO::FETCH_ASSOC);

$query =$pdo->prepare("SELECT * FROM voitures");
$query->execute();
$voitures = $query->fetchAll(PDO::FETCH_ASSOC);

$query =$pdo->prepare("SELECT * FROM locations");
$query->execute();
$locations = $query->fetchAll(PDO::FETCH_ASSOC);


// echo "<h2>Clients</h2>";  //Soit on reste en PHP et on echo les données
// echo "<table>
// <tr>
// <th>Nom</th>
// <th>Prénom</th>
// <th>Code Postal</th>
// <th>Téléphone</th>
// </tr>";
// foreach ($clients as $key => $client) {
//     echo "
//     <tr>
//         <td>" . $client['nom'] . "</td>
//         <td>" . $client['prenom'] . "</td>
//         <td>" . $client['codepostal'] . "</td>
//         <td>" . $client['telephone'] . "</td>
//     </tr>
//     ";
// }
// echo "</table>";



// Soit on ferme notre balise php pour faire directement du HTML
?>
<h2>Clients</h2>
<table>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Code Postal</th>
        <th>Téléphone</th>
    </tr>
<?php foreach ($clients as $key => $client) { ?>
    <tr>
        <td><?=$client['nom']?></td>
        <td><?=$client['prenom']?></td>
        <td><?=$client['codepostal']?></td>
        <td><?=$client['telephone']?></td>
    </tr>
<?php } ?>
</table>


<h2>Voitures</h2>
<table>
    <tr>
        <th>Immatriculation</th>
        <th>Marque</th>
        <th>Cylindrée (Ch)</th>
    </tr>
<?php foreach ($voitures as $key => $voiture) { ?>
    <tr>
        <td><?=$voiture['immatriculation']?></td>
        <td><?=$voiture['marque']?></td>
        <td><?=$voiture['cylindree']?></td>
    </tr>
<?php } ?>
</table>


<h2>Locations</h2>
<table>
    <tr>
        <th>ID Client</th>
        <th>Immatriculation</th>
        <th>Assurance</th>
    </tr>
<?php foreach ($locations as $key => $location) { ?>
    <tr>
        <td><?=$location['idclient']?></td>
        <td><?=$location['immatriculation']?></td>
        <td><?php if($location['assurance'] == '1') { echo "Oui"; } else { echo "Non"; } ?></td>
    </tr>
<?php } ?>
</table>