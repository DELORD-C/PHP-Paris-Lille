<?php

use Animaux\Jaguar; // Use permet de définir un alias (use NOMDELACLASSE as ALIAS) si on ne précise pas as, seul le dernier mot (nom de la classe) sera pris en compte

include('class/Autoloader.php');

$chien = new Animaux\Animal; //ic on précise le namespace
$jaguar1 = new Jaguar;