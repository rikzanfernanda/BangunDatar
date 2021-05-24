<?php

namespace BangunDatar;

use BangunDatar\Abstracts\AbstractJajargenjang;

class Jajargenjang extends AbstractJajargenjang {

    public function __construct($alas = null, $miring = null, $tinggi = null) {
        $this->alas = $alas;
        $this->miring = $miring;
        $this->tinggi = $tinggi;
    }

    public function getLuas(float $alas, float $tinggi) {
        return $alas * $tinggi;
    }

    public function getKeliling(float $alas, float $miring) {
        return (2 * $alas) + (2 * $miring);
    }

    public function getAlasL($luas, $tinggi) {
        return $luas / $tinggi;
    }

    public function getTinggiL($luas, $alas) {
        return $luas / $alas;
    }

    public function getAlasK($keliling, $miring) {
        return ($keliling - 2 * $miring) / 2;
    }

    public function getMiringK($keliling, $alas) {
        return ($keliling - 2 * $alas) / 2;
    }

}
