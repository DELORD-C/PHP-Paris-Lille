<?php

$rand = rand(1, 100);



//switch permet de définir des actions en fonction de la valeur d'une variable
switch ($rand) {
    case 10:
        echo 'dix';
        break;

    case 20:
        echo 'vingt';
        break;

    case 30:
        echo 'trente';
        break;
    
    default:
        echo 'inconnu';
        break;
}

// =
// if ($rand == 10) {
//     echo 'dix';
// }
// else if ($rand = 20) {
//     echo 'vingt';
// }
// else if ($rand = 30) {
//     echo 'trente';
// }
// else {
//     echo 'inconnu';
// }



//operateurs ternaires = fait la meme chose qu'un if else mais avec une ecriture condenssée
echo $rand == 10 ? 'dix' : 'inconnue';

// = 
// if ($rand == 10) {
//     echo 'dix';
// }
// else {
//     echo 'inconnu';
// }