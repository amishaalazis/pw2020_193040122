<?php
// mehubungkan dengan file php lainya
require 'php/functions.php';

//melakukan query
$makanan = query("SELECT * FROM tugas");
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
			<table border="1" cellspacing="0" cellpadding="10">
					<td width="10%"><h3>No</h3></td>
					<td width="10%"><h3>Foto</h3></td>
					<td width="10%"><h3>Nama</h3></td>
					<td width="10%"><h3><center>Asal</center></h3></td>
					<td width="10%"><h3>Harga Pasaran</h3></td>
					<td width="10%"><h3>Rating</h3></td>
			</tr>
				<?php $i = 1 ?>
				<?php foreach ($makanan as $mkn) : ?>
				<tr>
					<td><?= $i ?></td>
					<td><img src="assets/img/<?= $mkn["img"]; ?>"></td>
					<td><?= $mkn["nama"] ?></td>
					<td><?= $mkn["asal"] ?></td>
					<td><?= $mkn["harga_pasaran"] ?></td>
					<td><?= $mkn["rating"] ?></td>
				</tr>
				<?php $i++ ?>
				<?php endforeach ?>

		</table>

		