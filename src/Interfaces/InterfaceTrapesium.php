<?php

namespace BangunDatar\Interfaces;

interface InterfaceTrapesium {

    public function atas(): ?float;

    public function bawah(): ?float;

    public function tinggi(): ?float;

    public function miring(): ?float;
    
    public function luas(): ?float;
    
    public function keliling(): ?float;
}
