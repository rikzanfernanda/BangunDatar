<?php

namespace BangunDatar\Abstracts;

use BangunDatar\Interfaces\InterfacePersegiPjg;

abstract class AbstractPersegiPanjang implements InterfacePersegiPjg {

    protected $panjang = 0;
    protected $lebar = 0;

    public function luas(): ?float {
        return $this->panjang * $this->lebar;
    }

    public function keliling(): ?float {
        return (2 * $this->panjang) + (2 * $this->lebar);
    }

    public function panjang(): ?float {
        return $this->panjang;
    }

    public function lebar(): ?float {
        return $this->lebar;
    }

}
