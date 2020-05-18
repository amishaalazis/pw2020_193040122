<?php

// function perhitungan($tambah,$kurang,$bagi,$kali)


// 	if ($jumlah == $tambah)
// 	{
// 	$hasil = $angka1+$angka2;}
	function perhitungan($angka1,$angka2){
		if ($angka1 + $angka2) {
			echo $angka1 + $angka2;
		}else {
			echo "gagal";
		}
	}



	//eksekusi
	//-----------------
	$angka1 = $_GET['angka1'];
	$angka2 = $_GET['angka2'];
	perhitungan($angka1,$angka2);


 ?>