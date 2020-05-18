<?php

session_start();

if(!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
    require 'functions.php';

    // ambil id dari url admin.php
    $id = $_GET['id'];

    //query mahasiswa berdasarkan id
    $mkn = query("SELECT * FROM makanan WHERE id = $id")[0];
    // var_dump($mkn);

    //memastikan kalau tombol ubah sudah ditekan
    if(isset($_POST['ubah'])) {
        if(ubah($_POST) > 0) {
            echo "
            <script>
                alert('Data Berhasil diubah!');
                document.location.href = 'admin.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('Data Gagal diubah!');
                document.location.href = 'admin.php';
            </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
     <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>


    <title>Ubah Data</title>
</head>
<body style="background-color: pink;">
  <nav>
    <div class="nav-wrapper">
      <a  class="brand-logo center">Form Ubah Data Makanan</a>
    </div>
  </nav>
        
<form action="" method="post">
    <input type="hidden" name="id" value="<?= $mkn['id']?>">
    <ul>
        <li>
            <label for="nama">Nama: </label><br>
            <input type="text" name = "nama" id="nama" required><br><br>
        </li>
        <li>
            <label for="asal">Asal: </label><br>
            <input type="text" name = "asal" id="asal" required><br><br>
        </li>
        <li>
            <label for="harga_pasaran">Harga Pasaran: </label><br>
            <input type="text" name = "harga_pasaran" id="harga_pasaran" required><br><br>
        </li>
        <li>
            <label for="bahan_dasar">Bahan Dasar: </label><br>
            <input type="text" name = "bahan_dasar" id="bahan_dasar" required><br><br>
        </li>
        <li>
            <label for="img">Gambar: </label><br>
            <input type="text" name = "img" id="img" required><br><br>
        </li>
        <li>
            <br>
            <button class="waves-effect waves-light btn" name="ubah">Ubah Data</button>
            
                <a class="waves-effect waves-light btn" href="admin.php" style="text-decoration : none; color : white;">Kembali</a>
            
        </li>
    </ul>
</form>
</body>
</html>

