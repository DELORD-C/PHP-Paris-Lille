<?php

namespace Animaux;

class Chien extends Animal implements AnimalCompanie {
    function jouer () {
        echo 'Ouaf !';
    }
    function caresser () {
        echo 'Ouaf';
    }
}