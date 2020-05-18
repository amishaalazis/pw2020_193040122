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
    
    <div class="add">
        <a class="waves-effect waves-light btn-small pink lighten-3" href="tambah.php">Tambah Data</a>
    </div> 
    <div class="logout">
        <a class="waves-effect waves-light btn-small pink lighten-3" href="logout.php">Logout</a>
    </div>

    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button class="waves-effect waves-light btn" name="cari">Cari</button>
        <button class="waves-effect waves-light btn" ><a href="../index.php" style="text-decoration : none; color : white;">Kembali</a></button>
    </form>

   


    <table style="background-color: #42f5e0;" border="1" cellpadding ="13" cellspacing="0">
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
    </table>

</body>
</html>