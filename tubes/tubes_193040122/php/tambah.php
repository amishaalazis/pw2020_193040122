<?php

session_start();

if(!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
    require 'functions.php';

    if(isset($_POST['tambah'])) {
        if(tambah($_POST) > 0) {
            echo "
            <script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'admin.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('Data Gagal ditambahkan!');
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

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>


    <title>Tambah Data</title>
</head>
<body style="background-color: pink;">
    
  <nav>
    <div class="nav-wrapper">
      <a class="brand-logo center">Tambah Data Makanan</a>
    </div>
  </nav>

<form action="" method="post">
     <div class="container">
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
            <button class="waves-effect waves-light btn" type="submit" name="tambah">Tambah Data</button>
                <a class="waves-effect waves-light btn" href="admin.php">Kembali</a>
        </li>
    </ul>
</div>
</form>
</body>
</html>

