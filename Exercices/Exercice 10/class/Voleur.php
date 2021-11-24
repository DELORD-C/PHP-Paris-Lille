<?php

class Voleur extends Elfe {
    protected $force = 12;
    protected $intelligence = 10;
    protected $agilite = 18;

    function invisibilité () {
        echo $this->nom . " est devenu invisible.<br/>";
    }
}