<?php

session_start();

if(!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
// menghubungkan dengan file php lainya
require 'functions.php';
// melakukan query
$makanan = query ( "SELECT * FROM  makanan" );

if(isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $makanan = query("SELECT * FROM makanan WHERE
                img LIKE '%$keyword%' OR
                nama LIKE '%$keyword%' OR
                asal LIKE '%$keyword%' OR
                harga_pasaran LIKE '%$keyword%' OR
                bahan_dasar LIKE '%$keyword%'  ");
} else {
    $makanan = query("SELECT * FROM makanan");
}


?>

<html>
<head>

     <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Tugas Besar</title>

    <style>
        img{
            width : 150px;
        }
    </style>
</head>
<body style="background-color: pink;">
<nav>
    <div class="container">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Halaman Admin</a>
      <ul class="right hide-on-med-and-down">
        <li><a class="waves-effect waves-light btn-small" href="tambah.php">Tambah Data</a></li>
      </ul>
    </div>
    </div>
  </nav>


    
    

    <form action="" method="get">
        <div class="container">
        <input type="text" name="keyword" autofocus>
        <button class="waves-effect waves-light btn" name="cari">Cari</button>
        <button class="waves-effect waves-light btn" ><a href="admin.php" style="text-decoration : none; color : white;">Kembali</a></button>
    </div>
    </form>

   

    <table style="background-color: #42f5e0;" border="1" cellpadding ="13" cellspacing="0">
        <div class="container">
        <tr>
            <th>#</th>
            <th>opsi</th>
            <th>gambar</th>
            <th>nama</th>
            <th>asal</th>
            <th>harga pasaran</th>
            <th>bahan dasar</th>
        </tr>


    <?php if(empty($makanan)) : ?>
    <tr>
        <td colspan="7">
            <h1>Data Tidak Ditemukan</h1>
        </td>
    </tr>
    <?php else : ?>
        <?php $i = 1; ?>
        <?php foreach ($makanan as $mkn) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a class="waves-effect waves-light btn-small" href="ubah.php?id=<?= $mkn['id'] ?>">Ubah</a>
                    <a class="waves-effect waves-light btn-small" href="hapus.php?id=<?= $mkn['id']?>" onclick="return confirm('Hapus Data??')">Hapus</a>
                </td>
                <td><img src="../assets/img/<?= $mkn['img']?>" alt=""></td>
                <td><?= $mkn['nama']?></td>
                <td><?= $mkn['asal']?></td>
                <td><?= $mkn['harga_pasaran']?></td>
                <td><?= $mkn['bahan_dasar']?></td>
            </tr>
            <?php $i++;?>
        <?php endforeach;?>
    <?php endif;?>
</div>
    </table>


    <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Food is Everything</h5>
                <p class="grey-text text-lighten-4">You can choose whatever you like.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Makanan</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" >Sapi</a></li>
                  <li><a class="grey-text text-lighten-3" >Ayam</a></li>
                  <li><a class="grey-text text-lighten-3" >Kambing</a></li>
                  <li><a class="grey-text text-lighten-3" >Ikan</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
             <div class="logout">
        
        <a class="waves-effect waves-light btn-small" href="logout.php">Logout</a>
    </div>
    
            </div>
          </div>
        </footer>
            

</body>
</html>