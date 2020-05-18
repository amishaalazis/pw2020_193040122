<?php 

	echo "Ini adalah tampilan halaman";
	echo "<hr>";
	// echo $_GET['username'];

	function ceklogin($username,$password){
		if ($username == "amisha" && $password == "alazis") {
			echo "Berhasil Login";
		}else {
			echo "Gagal Login";
		}
	}



	//eksekusi
	//-----------------
	$username = $_GET['username'];
	$pasaword = $_GET['password'];
	ceklogin($username,$password);

 ?>