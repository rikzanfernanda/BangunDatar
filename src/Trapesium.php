<?php

namespace BangunDatar;

class Trapesium
{
	public function luas(float $a, float $b, float $t)
	{
		return (($a + $b) / 2) * $t;
	}

	public function keliling(float $a, float $b, float $c, float $d)
	{
		return $a + $b + $c + $d;
	}
}