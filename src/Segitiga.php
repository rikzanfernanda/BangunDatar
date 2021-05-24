<?php

namespace BangunDatar;

use BangunDatar\Abstracts\AbstractSegitiga;

class Segitiga extends AbstractSegitiga {

    public function __construct($alas = null, $tinggi = null, $miring = null) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->miring = $miring;
    }

    public function getLuas(float $a, float $t) {
        return ($a * $t) / 2;
    }

    public function getKeliling(float $a, float $b, float $c) {
        return $a + $b + $c;
    }

    public function getAlasL($luas, $tinggi) {
        return ($luas * 2) / $tinggi;
    }

    public function getTinggiL($luas, $alas) {
        return ($luas * 2) / $alas;
    }

    public function getAlasK($keliling, $tinggi, $miring) {
        return $keliling - $tinggi - $miring;
    }

    public function getTinggiK($keliling, $alas, $miring) {
        return $keliling - $alas - $miring;
    }

    public function getMiringK($keliling, $alas, $tinggi) {
        return $keliling - $tinggi - $alas;
    }

    public function getAlasPy($tinggi, $miring) {
        return sqrt(pow($miring, 2) - pow($tinggi, 2));
    }

    public function getTinggiPy($alas, $miring) {
        return sqrt(pow($miring, 2) - pow($alas, 2));
    }

    public function getMiringPy($alas, $tinggi) {
        return sqrt(pow($alas, 2) + pow($tinggi, 2));
    }

}
