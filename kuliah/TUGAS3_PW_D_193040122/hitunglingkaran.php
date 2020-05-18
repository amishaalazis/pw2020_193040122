<?php 
	// $phi = 3.14;
	// $r = 6;

	// echo "Menghitung Luas Lingkaran <br>";
	// echo "phi = 3,14 <br>";
	// echo "r = $r <br>";

	// $luaslingkaran = $phi*$r*$r;
	// echo "Luas Lingkaran = $luaslingkaran";

	function hitungluaslingkaran ($r){
		$luas = $r*$r*3.14;
		return $luas;
	}

	function tambahluas2lingkaran($luas1, $luas2)
	{
		$total_luas = $luas1+$luas2;
		return $total_luas;
	}

	$r1 = 7;
	$r2 = 8;


	$luas_1 = hitungluaslingkaran($r1);

	$luas_2 = hitungluaslingkaran($r2);

	echo "Total Luas = ".tambahluas2lingkaran($luas_1,$luas_2);

 ?>