<?php

Abstract class Humain extends Mortel {
    protected $arrogance = 0;
    protected $pointsDeVie = 20;

    function setArrogance (int $arrogance) {
        $this->arrogance = $arrogance;
    }

    function getArrogance () {
        return $this->arrogance;
    }

    function mepris () {
        $this->arrogance += 20;
    }
}