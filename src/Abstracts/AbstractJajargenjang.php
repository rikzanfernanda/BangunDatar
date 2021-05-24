<?php

namespace BangunDatar\Abstracts;

use BangunDatar\Interfaces\InterfaceJajargenjang;

abstract class AbstractJajargenjang implements InterfaceJajargenjang {

    protected $alas = 0;
    protected $miring = 0;
    protected $tinggi = 0;
    
    public function alas(): ?float {
        return $this->alas;
    }
    
    public function tinggi(): ?float {
        return $this->tinggi;
    }
    
    public function miring(): ?float {
        return $this->miring;
    }

    public function luas(): ?float {
        return $this->alas * $this->tinggi;
    }

    public function keliling(): ?float {
        return 2 * ($this->alas + $this->miring);
    }
}
