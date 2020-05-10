<?php
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

<h3>Form Tambah Data Makanan</h3>
<form action="" method="post">
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
            <button type="submit" name="tambah">Tambah Data</button>
            <button type="submit">
                <a href="../index.php" style="text-decoration : none; color : black;">Kembali</a>
            </button>
        </li>
    </ul>
</form>