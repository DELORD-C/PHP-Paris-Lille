<?php

include('class/Autoloader.php');

if (Auth::isConnected()) {
    header('location: home.php');
}

Affichage::display('Header');
Affichage::display('Connection');
Affichage::display('Footer');

//https://api.themoviedb.org/3/search/movie?api_key=625b3e1220c0fca7c7ac7f6fcca786ac&language=fr-FR&query=

//625b3e1220c0fca7c7ac7f6fcca786ac