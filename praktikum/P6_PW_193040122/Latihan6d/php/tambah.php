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

<h2>Form Tambah Data Makanan</h2>
<table cellpadding="10" cellspacing="5" border="1">
	<tr><td>
<h2>Form Tambah Data Makanan</h2>		
<form action="" method="post">
	<ul>
		<li>
			<label for="img"> Foto :</label>
			<input type="text" name="img" id="img" required><br><br>
		</li>
		<li>
			<label for="nama">Nama :</label>
			<input type="text" name="nama" id="nama" required><br><br>
		</li>
		<li>
			<label for="asal">Asal :</label>
			<input type="text" name="asal" id="asal" required><br><br>
		</li>
		<li>
			<label for="harga_pasaran">Harga Pasaran :</label>
			<input type="text" name="harga_pasaran" id="harga_pasaran" required><br><br>
		</li>
		<li>
			<label for="bahan_dasar">Bahan Dasar :</label>
			<input type="text" name="bahan_dasar" id="bahan_dasar" required><br><br>
		</li>
		<br>
		<button type="submit" name="tambah">Tambah Data</button>
		<button type="submit">
			<a href="index.php" style="text-decoration: none; color: black;">kembali</a>
		</button>
	</ul>

	</form>
</td>
</tr>
</table>