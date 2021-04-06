<?php

namespace BangunDatar;

class Lingkaran
{
	public function luas(float $r)
	{
		return 3.14 * $r * $r;
	}

	public function keliling(float $r)
	{
		return 2 * 3.14 * $r;
	}
}