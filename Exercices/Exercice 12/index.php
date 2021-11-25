<?php

include('class/Autoloader.php');

if (Auth::isConnected()) {
    header('location: home.php');
}

Affichage::display('Header');
Affichage::display('Connection');
Affichage::display('Footer');