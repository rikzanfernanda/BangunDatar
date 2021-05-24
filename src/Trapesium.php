<?php

namespace BangunDatar;

use BangunDatar\Abstracts\AbstractTrapesium;

class Trapesium extends AbstractTrapesium {

    public function __construct($atas = null, $bawah = null, $tinggi = null, $miring = null) {
        $this->atas = $atas;
        $this->bawah = $bawah;
        $this->tinggi = $tinggi;
        $this->miring = $miring;
    }

    public function getLuas(float $atas, $bawah, $tinggi) {
        return (($atas + $bawah) / 2) * $tinggi;
    }

    public function getKeliling(float $atas, float $bawah, float $tinggi, float $miring) {
        return $atas + $bawah + $tinggi + $miring;
    }

    public function getAtasL($luas, $bawah, $tinggi) {
        return (($luas / $tinggi) * 2) - $bawah;
    }

    public function getBawahL($luas, $atas, $tinggi) {
        return (($luas / $tinggi) * 2) - $atas;
    }

    public function getTinggiL($luas, $atas, $bawah) {
        return $luas / (($atas + $bawah) / 2);
    }

    public function getAtasK($keliling, $bawah, $tinggi, $miring) {
        return $keliling - $bawah - $tinggi - $miring;
    }

    public function getBawahK($keliling, $atas, $tinggi, $miring) {
        return $keliling - $atas - $tinggi - $miring;
    }

    public function getTinggiK($keliling, $atas, $bawah, $miring) {
        return $keliling - $atas - $bawah - $miring;
    }

    public function getMiringK($keliling, $atas, $bawah, $tinggi) {
        return $keliling - $atas - $bawah - $tinggi;
    }

}
