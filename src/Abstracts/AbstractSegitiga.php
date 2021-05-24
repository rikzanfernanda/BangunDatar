<?php

namespace BangunDatar\Abstracts;

use BangunDatar\Interfaces\InterfaceSegitiga;

abstract class AbstractSegitiga implements InterfaceSegitiga {

    protected $alas = 0;
    
    protected $tinggi = 0;
    
    protected $miring = 0;
    
    public function alas(): ?float{
        return $this->alas;
    }
    
    public function tiggi(): ?float{
        return $this->tinggi;
    }
    
    public function miring(): ?float{
        return $this->miring;
    }

    public function luas(): ?float {
        return ($this->alas * $this->tinggi) / 2;
    }

    public function keliling(): ?float {
        return $this->alas + $this->tinggi + $this->miring;
    }
}
