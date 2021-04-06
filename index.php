<?php

require 'vendor/autoload.php';

use BangunDatar\PersegiPanjang;
use BangunDatar\Persegi;
use BangunDatar\Jajargenjang;
use BangunDatar\BelahKetupat;
use BangunDatar\Trapesium;
use BangunDatar\Layang;
use BangunDatar\Segitiga;
use BangunDatar\Lingkaran;

$pp = new PersegiPanjang();
$p = new Persegi();
$l = new Lingkaran();
echo $l->luas(25);
echo $pp->keliling(5,10);