<?php

namespace BangunDatar\Abstracts;

use BangunDatar\Interfaces\InterfaceLingkaran;

abstract class AbstractLingkaran implements InterfaceLingkaran {

    protected $r = 0;
    protected $d = 0;
    
    public function r(): ?float {
        return $this->r;
    }
    
    public function d(): ?float {
        return $this->d;
    }

    public function luas(): ?float {
        return 3.14 * $this->r * $this->r;
    }

    public function keliling(): ?float {
        return 2 * 3.14 * $this->r;
    }
}
