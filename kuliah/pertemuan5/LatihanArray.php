<?php 
	$bulan = array("Januari", "Febuari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

	echo "Panjang Array = ".count($bulan);
	echo "<br>";
	echo "<br>";
	print_r($bulan);

	echo "<br>";
	echo "<br>";

	for ($i=0; $i < count($bulan) ; $i++) { 
		echo "Bulan = ".$bulan[$i];
		echo "<br>";
	}
	echo "<br>";

	echo $bulan[6];



 ?>