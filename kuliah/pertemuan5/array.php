<?php 

	// // array 1 dimensi
	// $arah = array("kanan", "kiri");

	// $arah[2] = "atas";

	// $arah[] = "bawah";

	// echo "Panjang Array = ".count($arah);
	// echo "<br>";
	// print_r($arah);

	// array multidimensi
	$mahasiswa = array();
	$mahasiswa[0][0]= "193040122";
	$mahasiswa[0][1]= "Amisha Al azis";
	$mahasiswa[1][0]= "Bandung";
	$mahasiswa[1][1]= "082219777428";
 
 	// print("<pre>".print_r($mahasiswa,true)."</pre>");

	for ($i=0; $i < count($mahasiswa) ; $i++) { 
		for ($j=0; $j < count($mahasiswa) ; $j++) { 
			
			echo "Mahasiswa = ".$mahasiswa;
		}
		
	}


?>