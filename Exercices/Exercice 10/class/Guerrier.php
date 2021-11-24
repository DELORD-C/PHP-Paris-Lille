<?php

class Guerrier extends Nain {
    protected $force = 18;
    protected $intelligence = 6;
    protected $agilite = 14;

    function criDeGuerre () {
        $this->force += 2;
    }
}