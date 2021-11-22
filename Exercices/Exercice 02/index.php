<?php

function returnHuit (int $nbr) {
    $result = '';
    for ($i=0; $i < $nbr; $i++) { 
        $result .= '8';
    }
    return $result;
}

echo returnHuit(45);