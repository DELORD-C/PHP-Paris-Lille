<?php

dump($_POST);

echo "Nom : " . $_POST['nom'] . "<br/>";
echo "Prénom : " . $_POST['prenom'] . "<br/>";
echo "Téléphone : " . $_POST['tel'] . "<br/>";
echo "Email : " . $_POST['email'] . "<br/>";

function dump ($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}