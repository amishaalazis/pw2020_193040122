<?php
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
    <title>Latihan7a</title>
    <style>
        img{
            width : 150px;
        }
    </style>
</head>
<body>
    
    <div class="add">
        <a href="tambah.php">Tambah Data</a>
    </div> 
    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>

    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari</button>
        <button type="submit"><a href="../index.php" style="text-decoration : none; color : black;">Kembali</a></button>
    </form>

   


    <table border="1" cellpadding ="13" cellspacing="0">
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
                    <a href="ubah.php?id=<?= $mkn['id'] ?>"><button>Ubah</button></a>
                    <a href="hapus.php?id=<?= $mkn['id']?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
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