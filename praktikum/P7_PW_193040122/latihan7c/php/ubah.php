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

<h3>Form Ubah Data Makanan</h3>
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
            <button type="submit" name="ubah">Ubah Data</button>
            <button type="submit">
                <a href="../index.php" style="text-decoration : none; color : black;">Kembali</a>
            </button>
        </li>
    </ul>
</form>