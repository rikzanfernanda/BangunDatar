<?php

namespace BangunDatar;

class Layang
{
	public function luas(float $d1, float $d2)
	{
		return ($d1 * $d2) / 2;
	}

	public function keliling(float $a, float $b, float $c, float $d)
	{
		return $a + $b + $c + $d;
	}
}