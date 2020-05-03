<?php
    require 'functions.php';

    // ambil id dari url admin.php
    $id = $_GET['id'];

    //query mahasiswa berdasarkan id
    $alm = query("SELECT * FROM makanan WHERE id = $id")[0];
    

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
<h2>Form Ubah Data Makanan</h2>       
<form action="" method="post">
    <input type="hidden" name="id" value="<?= $mkn['id']?>">
    <ul>
        <li>
            <label for="img"> Gambar: </label>
            <input type="text" name="img" id="img" required value="<? $mkn['img']?>"><br><br>
        </li>
        <li>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" required value="<? $mkn['nama']?>"><br><br>
        </li>
        <li>
            <label for="asal">Asal :</label>
            <input type="text" name="asal" id="asal" required value="<? $mkn['asal']?>">><br><br>
        </li>
        <li>
            <label for="harga">Harga Pasaran :</label>
            <input type="text" name="harga" id="harga" required value="<? $mkn['harga_pasaran']?>">><br><br>
        </li>
        <li>
            <label for="bahan">Bahan Dasar :</label>
            <input type="text" name="bahan" id="bahan" required value="<? $mkn['bahan_dasar']?>">><br><br>
        </li>
        <br>
        <button type="submit" name="tambah">Ubah Data</button>
        <button type="submit">
            <a href="index.php" style="text-decoration: none; color: black;">kembali</a>
        </button>
    </ul>

    </form>
</td>
</tr>
</table>