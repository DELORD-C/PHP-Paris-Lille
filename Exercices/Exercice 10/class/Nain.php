<?php

Abstract class Nain extends Mortel {
    protected $richesse = 0;
    protected $pointsDeVie = 24;

    function setRichesse (int $richesse) {
        $this->richesse = $richesse;
    }

    function getRichesse () {
        return $this->richesse;
    }

    function prospection () {
        $this->richesse += rand(1, 1000);
    }
}