<?php 
    // mengecek apakah ada id yang dikirimkan
    // jika tidak makan akan dikembalikan ke halakam index.php
    if(!isset($_GET['id'])){
      header("location: ../im\index.php");
    }
    require 'functions.php';

    //mengambil id dari url
    $id = $_GET['id'];

    //melakikan query dengan parameter id uang diambil dari url
    $makanan = query("SELECT * FROM tugas WHERE id =$id")[0];
?>
<html>

<head>
    <title>Makanan</title>
    <link rel="stylesheet" hrefet="style.css">
</head>
<body>
      <div class ="container">
        <div class="gambar">
          <img src="../assets/img/<?= $makanan["Foto"]; ?>" alt="">
        </div>
      <div class="keterangan">
          <p><?= $makanan["Nama"];?></p>
          <p><?= $makanan["Asal"];?></p>
          <p><?= $makanan["Harga Pasaran"];?></p>
          <p><?= $makanan["Rating"];?></p>
        </div>
        <button class ="tombol-kembali"><a href="../index.php">kembali</a></button>
      </div>
</body>
</html>