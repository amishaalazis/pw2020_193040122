<?php

    // menghubungkan dengan file php lainya
    require 'php/functions.php';

    //melakukan query
    $makanan = query("SELECT * FROM makanan");

    // Tugas no 2
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
    <title>Tugas</title>
    <style>
        img{ width:145px; padding:25px; }
        td{ text-align : center; }
    </style>
</head>
<body>


    <!-- Tugas No 2 : Tambahkan kolom pencarian pada halaman front-end(index) dari web kalian.   -->

    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari</button>
    </form>




    <?php if(empty($makanan)) : ?>
    <div>
            <h1>Data Tidak Ditemukan</h1>
    </div>
    <?php else : ?>
        <div class="container">
            <?php foreach ($makanan as $mkn) : ?>
                <p class="nama">
                    <a href="php/detail.php?id=<?= $mkn['id'] ?>">
                        <?= $mkn["nama"] ?>
                    </a>
                </p>
            <?php endforeach; ?>
        </div>
        <?php endif;?>

    <a href="php/login.php">
        <button type="">KE HALAMAN ADMIN</button>
    </a>

</body>
</html>