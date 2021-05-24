<?php

namespace BangunDatar;

use BangunDatar\Abstracts\AbstractPersegiPanjang;

class PersegiPanjang extends AbstractPersegiPanjang {

    public function __construct($panjang = null, $lebar = null) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function getLuas(float $panjang, float $lebar) {
        return $panjang * $lebar;
    }

    public function getKeliling(float $panjang, float $lebar) {
        return 2 * ($panjang + $lebar);
    }

    public function getPanjangL($luas, $lebar) {
        return $luas / $lebar;
    }

    public function getLebarL($luas, $panjang) {
        return $luas / $panjang;
    }

    public function getPanjangK($keliling, $lebar) {
        return $keliling - (2 * $lebar) * 0.5;
    }

    public function getLebarK($keliling, $panjang) {
        return $keliling - (2 * $panjang) * 0.5;
    }

}
