<?php

namespace BangunDatar\Abstracts;

use BangunDatar\Interfaces\InterfacePersegi;

abstract class AbstractPersegi implements InterfacePersegi {

    protected $sisi = 0;

    public function luas(): ?float {
        return $this->sisi * $this->sisi;
    }

    public function keliling(): ?float {
        return 4 * $this->sisi;
    }

    public function sisi(): ?float {
        return $this->sisi;
    }

}
