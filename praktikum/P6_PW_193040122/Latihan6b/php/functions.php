<?php 
	// function untuk melakukan koneksi ke database
	function koneksi() {
		$conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
		mysqli_select_db($conn, "tubes_193040122") or die("Database salah!");

		return $conn;
	}
//function untuk melakukan query ke database
function query($sql){
  $conn = koneksi();
  $result = mysqli_query($conn,"$sql");

  $makanan = [];
  while($mkn = mysqli_fetch_assoc($result)){
      $makanan[] = $mkn ;
  }
  return $makanan ;
  }

 // functions untuk menambahkan data dalam database
 function tambah($data){
  $conn = koneksi() ;

  $img = htmlspecialchars($data['img']);
  $nama = htmlspecialchars($data['nama']);
  $asal = htmlspecialchars($data['asal']);
  $harga = htmlspecialchars($data['harga_pasaran']);
  $bahan = htmlspecialchars($data['bahan_dasar']);

  $query = "INSERT INTO makanan
            VALUES 
            ('','$img','$nama','$asal','$harga','$bahan')";
    mysql_query($conn ,$query);

    return mysql_affected_rows($conn);
 }


 //functions untuk menghapus data 
function hapus($id){
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM makanan WHERE id = $id");

    return mysqli_affected_rows($conn);
}

//functions untuk menambahkan data didalam database
function ubah($data) {
    $conn = koneksi();

   
  $img = htmlspecialchars($data['img']);
  $nama = htmlspecialchars($data['nama']);
  $asal = htmlspecialchars($data['asal']);
  $harga = htmlspecialchars($data['harga_pasaran']);
  $bahan = htmlspecialchars($data['bahan_dasar']);

  $query = "UPDATE makanan SET
            img =$img
            nama = $nama
            asal = $asal
            harga = $harga
            bahan = $bahan
            where id =$id";

    mysqli_query($conn , $query);

    return mysqli_affected_rows($conn);
}



?>