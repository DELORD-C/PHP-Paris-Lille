<?php

Abstract class Elfe extends Mortel {
    protected $esquive = 0;
    protected $pointsDeVie = 18;

    function setEsquive (int $esquive) {
        $this->esquive = $esquive;
    }

    function getEsquive () {
        return $this->esquive;
    }

    function acrobaties () {
        $this->esquive += 10;
    }
}