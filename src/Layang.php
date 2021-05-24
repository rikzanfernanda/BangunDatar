<?php

namespace BangunDatar;

use BangunDatar\Abstracts\AbstractLayang;

class Layang extends AbstractLayang {

    public function __construct($d1 = null, $d2 = null, $panjang = null, $pendek = null) {
        $this->d1 = $d1;
        $this->d2 = $d2;
        $this->panjang = $panjang;
        $this->pendek = $pendek;
    }

    public function getLuas(float $d1, float $d2) {
        return ($d1 * $d2) / 2;
    }

    public function getKeliling(float $panjang, float $pendek) {
        return (2 * $panjang) + (2 * $pendek);
    }

    public function getD1L($luas, $d2) {
        return ($luas * 2) / $d2;
    }

    public function getD2L($luas, $d1) {
        return ($luas * 2) / $d1;
    }

    public function getPanjangK($keliling, $pendek) {
        return ($keliling - (2 * $pendek)) / 2;
    }
    
    public function getPendekK($keliling, $panjang) {
        return ($keliling - (2 * $panjang)) / 2;
    }

}
