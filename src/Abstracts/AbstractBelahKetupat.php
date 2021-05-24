<?php

namespace BangunDatar\Abstracts;

use BangunDatar\Interfaces\InterfaceBelahKetupat;

abstract class AbstractBelahKetupat implements InterfaceBelahKetupat {

    protected $d1 = 0;
    protected $d2 = 0;
    protected $sisi = 0;
    
    public function d1(): ?float{
        return $this->d1;
    }
    
    public function d2(): ?float{
        return $this->d2;
    }
    
    public function sisi(): ?float {
        return $this->sisi;
    }

    public function luas(): ?float {
        return 0.5 * $this->d1 * $this->d2;
    }

    public function keliling(): ?float {
        return 4 * $this->sisi;
    }

}
