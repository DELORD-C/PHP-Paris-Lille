<?php

include('class/Autoloader.php');

if (Auth::isConnected()) {
    Affichage::display('Header');
    Affichage::display('Disconnect');
    Affichage::display('Films');
    Affichage::display('Footer');
} else {
    header('location: index.php');
}