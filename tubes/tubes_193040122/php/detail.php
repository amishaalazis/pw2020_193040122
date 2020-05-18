<?php
//mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if(!isset($_GET["id"])) {
    header("location: ../index.php");
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// Melakukan query dengan parameter id yang mengambil dari url
$makanan  = query("SELECT * FROM makanan WHERE id = $id")[0];

?>

<html lang="en">
<head>

    <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body style="background-color: pink;">

    <nav>
    <div class="container">
    <div class="nav-wrapper">
      <a  class="brand-logo">   <?= $makanan['nama'] ?></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      </ul>
    </div>
  </div>
  </nav>
<br>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $makanan["img"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $makanan['nama'] ?></p>
            <p><?= $makanan['asal'] ?></p>
            <p><?= $makanan['harga_pasaran'] ?></p>
            <p><?= $makanan['bahan_dasar'] ?></p>
        </div>

      
    </div>
    
      <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Kembalikan Mood kamu dengan makan</h5>
                <p class="grey-text text-lighten-4">Tapi jgn makan siang pas bulan puasa ya..</p>
              </div>
              <div class="col l4 offset-l2 s12">

              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            <a class="waves-effect waves-light btn"href="../index.php">Kembali</a>
            </div>
          </div>
        </footer>

</body>
</html>