<?php

namespace BangunDatar\Abstracts;

use BangunDatar\Interfaces\InterfaceLayang;

abstract class AbstractLayang implements InterfaceLayang {

    protected $d1 = 0;
    protected $d2 = 0;
    protected $panjang = 0;
    protected $pendek = 0;
    
    public function d1(): ?float{
        return $this->d1;
    }
    
    public function d2(): ?float{
        return $this->d2;
    }
    
    public function panjang(): ?float{
        return $this->panjang;
    }
    
    public function pendek(): ?float{
        return $this->pendek;
    }

    public function luas(): ?float {
        return 0.5 * $this->d1 * $this->d2;
    }

    public function keliling(): ?float {
        return (2 * $this->panjang) + (2 * $this->pendek);
    }
}
