<?php

namespace BangunDatar;

class Segitiga
{
	public function luas(float $a, float $t)
	{
		return ($a * $t) / 2;
	}

	public function keliling(float $a, float $b, float $c)
	{
		return $a + $b + $c;
	}
}