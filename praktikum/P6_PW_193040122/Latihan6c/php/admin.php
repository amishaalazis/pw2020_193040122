<?php 
    // menghubungkan dengan file php lainnya
    require 'functions.php';

    // melakukan query
    $makanan = query("SELECT * FROM makanan")
?>

?>

<html>
<head>
    <title>Latihan6a</title>
    <style>
        img{
            width : 150px;
        }
    </style>
</head>
<body>
    
    <table border="1" cellpadding ="13" cellspacing="0">
        <tr>
            <th>#</th>
            <th>opsi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Asal</th>
            <th>Harga Pasaran</th>
            <th>Bahan Dasar</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($makanan as $mkn) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href=""><button>Ubah</button></a>
                    <a href=""><button>Hapus</button></a>
                </td>
                <td><img src="../assets/img/<?= $mkn['img']?>" alt=""></td>
                <td><?= $mkn['nama']?></td>
                <td><?= $mkn['asal']?></td>
                <td><?= $mkn['harga_pasaran']?></td>
                <td><?= $mkn['bahan_dasar']?></td>
            </tr>
            <?php $i++;?>
        <?php endforeach;?>
    </table>

</body>
</html>