<?php

namespace BangunDatar;

use BangunDatar\Abstracts\AbstractPersegi;

class Persegi extends AbstractPersegi {

    public function __construct($sisi = 0) {
        $this->sisi = $sisi;
    }

    public function getLuas(float $s) {
        return $s * $s;
    }

    public function getKeliling(float $s) {
        return 4 * $s;
    }

    public function getSisiL($luas) {
        return sqrt($luas);
    }

    public function getSisiK($keliling) {
        return $keliling / 4;
    }

}
