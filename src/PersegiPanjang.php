<?php

namespace BangunDatar;

class PersegiPanjang
{
	public function luas(float $p, float $l)
	{
		return $p * $l;
	}

	public function keliling(float $p, float $l)
	{
		return 2 * ($p + $l);
	}
}