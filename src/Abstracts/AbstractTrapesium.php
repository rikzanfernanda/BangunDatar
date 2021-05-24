<?php

namespace BangunDatar\Abstracts;

use BangunDatar\Interfaces\InterfaceTrapesium;

abstract class AbstractTrapesium implements InterfaceTrapesium {

    protected $atas = 0;
    protected $bawah = 0;
    protected $tinggi = 0;
    protected $miring = 0;

    public function atas(): ?float {
        return $this->atas;
    }
    
    public function bawah(): ?float {
        return $this->bawah;
    }
    
    public function tinggi(): ?float {
        return $this->tinggi;
    }
    
    public function miring(): ?float {
        return $this->miring;
    }

    public function luas(): ?float {
        return 0.5 * ($this->bawah + $this->atas) * $this->tinggi;
    }

    public function keliling(): ?float {
        return $this->atas + $this->bawah + $this->tinggi + $this->miring;
    }
}
