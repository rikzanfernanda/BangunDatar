<?php

namespace BangunDatar;

use BangunDatar\Abstracts\AbstractLingkaran;

class Lingkaran extends AbstractLingkaran {

    public function __construct($r = null) {
        $this->r = $r;
        if ($r) {
            $this->d = 2 * $r;
        }
    }

    public function getLuas(float $r) {
        return 3.14 * $r * $r;
    }

    public function getKeliling(float $r) {
        return 2 * 3.14 * $r;
    }

    public function getRLuas($luas) {
        return sqrt($luas / 3.14);
    }

    public function getDLuas($luas) {
        return sqrt(($luas * 4) / 3.14);
    }

    public function getRKeliling($keliling) {
        return $keliling / 2 / 3.14;
    }
    
    public function getDKeliling($keliling) {
        return $keliling / 3.14;
    }

}
