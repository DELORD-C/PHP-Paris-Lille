<?php

namespace Vehicules;

class Voiture implements Chassis {
    function roue1 () {
        echo 'pneu 1';
    }

    function roue2 () {
        echo 'pneu 2';
    }

    function roue3 () {
        echo 'pneu 3';
    }

    function roue4 () {
        echo 'pneu 4';
    }
}