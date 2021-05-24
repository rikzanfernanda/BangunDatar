<?php

namespace BangunDatar;

use BangunDatar\Abstracts\AbstractBelahKetupat;

class BelahKetupat extends AbstractBelahKetupat {

    public function __construct($d1 = null, $d2 = null, $sisi = null) {
        $this->d1 = $d1;
        $this->d2 = $d2;
        $this->sisi = $sisi;
    }

    public function getLuas(float $d1, float $d2) {
        return ($d1 * $d2) / 2;
    }

    public function getKeliling(float $sisi) {
        return 4 * $sisi;
    }

    public function getD1L($luas, $d2) {
        return ($luas * 2) / $d2;
    }

    public function getD2L($luas, $d1) {
        return ($luas * 2) / $d1;
    }

    public function getSisiK($keliling) {
        return $keliling / 4;
    }

}
