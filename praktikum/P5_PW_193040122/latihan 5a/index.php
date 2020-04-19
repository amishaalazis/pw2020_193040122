<?php
	// melakukan koneksi ke database
	$conn = mysqli_connect("localhost","root","") or die("koneksi ke DB gagal");

	//memilih database
	mysqli_select_db($conn, "pw_193040122") or die("Database Salah!");

	// query mengambil objek dari table didalam database
	$result = mysqli_query($conn,"SELECT * FROM tugas");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>193040122</title>
	<link rel="stylesheet" href="css/style.css">
</head>
	<body>
	<div class="container">
		<h1>Makanan</h1>
			<table border="1" cellspacing="0" cellpadding="10" color="pink">
					<td width="10%"><h3>No</h3></td>
					<td width="10%"><h3>Foto</h3></td>
					<td width="10%"><h3>Nama</h3></td>
					<td width="10%"><h3><center>Asal</center></h3></td>
					<td width="10%"><h3>Harga Pasaran</h3></td>
					<td width="10%"><h3>Rating</h3></td>
			</tr>
				<?php $i = 1 ?>
				<?php while($makanan = mysqli_fetch_assoc($result)) : ?>
				<tr>
					<td><?= $i ?></td>
					<td><img src="assets/img/<?= $makanan["img"]; ?>"></td>
					<td><?= $makanan["nama"] ?></td>
					<td><?= $makanan["asal"] ?></td>
					<td><?= $makanan["harga_pasaran"] ?></td>
					<td><?= $makanan["rating"] ?></td>
				</tr>
				<?php $i++ ?>
				<?php endwhile ?>

		</table>
	</body>
</html>