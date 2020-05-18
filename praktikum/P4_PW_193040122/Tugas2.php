<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tugas</title>
		<style type="text/css">
		
			body {
				text-align: center;
			}
			img {
				width: 200px;
			}

		</style>
</head>
	<body>
		<h1>AMISHA's FAV FOOD</h1>

		<?php 
			$film = array(
			array("<img src = 'img/1.jpg'>", "Sate Padang", "Padang", "Rp. 25.000", "9/10"),
			array("<img src = 'img/2.jpg'>", "Soto Ayam", "Madura", "Rp. 15.000","8/10"),
			array("<img src = 'img/3.jpg'>", "Kikil", "Padang", "Rp. 20.000", "9.5/10"),
			array("<img src = 'img/4.jpg'>", "Indomie Goreng", "Indonesia", "Rp. 10.000", "8.2/10"),
			array("<img src = 'img/5.jpg'>", "Brownise", "Bandung", "Rp. 40.000", "7.5/10"),
			array("<img src = 'img/6.jpg'>", "Ice Cream", "Italia", "Rp. 20.000-50.000", "9.9/10"),
			array("<img src = 'img/7.jpg'>", "Rendang", "Padang", "Rp. 15.000", "8.9/10"),
			array("<img src = 'img/8.jpg'>", "Ayam Goreng Ibu Imas", "Bandung", "Rp. 15.000", "8/10"),
			array("<img src = 'img/9.jpg'>", "Iga Bakar", "Surabaya", "Rp. 45.000", "9/10"),
			array("<img src = 'img/10.jpg'>", "Gulali", "Inggris", "Rp. 10.000", "9.9/10")
	
			);

			 ?>
			<table border="1" cellspacing="0" cellpadding="10">
	
				<tr bgcolor="pink">
					<td><h3>Gambar</h3></td>
					<td><h3>Nama Makanan</h3></td>
					<td><h3><center>Asal Makanan</center></h3></td>
					<td><h3>Harga Pasaran</h3></td>
					<td><h3>Rating</h3></td>
				</div>
				</tr>
	
				<tr>
					<td><?php echo $film[0][0] ?></td>
					<td><?php echo $film[0][1] ?></td>
					<td><?php echo $film[0][2] ?></td>
					<td><?php echo $film[0][3] ?></td>
					<td><?php echo $film[0][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $film[1][0] ?></td>
					<td><?php echo $film[1][1] ?></td>
					<td><?php echo $film[1][2] ?></td>
					<td><?php echo $film[1][3] ?></td>
					<td><?php echo $film[1][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $film[2][0] ?></td>
					<td><?php echo $film[2][1] ?></td>
					<td><?php echo $film[2][2] ?></td>
					<td><?php echo $film[2][3] ?></td>
					<td><?php echo $film[2][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $film[3][0] ?></td>
					<td><?php echo $film[3][1] ?></td>
					<td><?php echo $film[3][2] ?></td>
					<td><?php echo $film[3][3] ?></td>
					<td><?php echo $film[3][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $film[4][0] ?></td>
					<td><?php echo $film[4][1] ?></td>
					<td><?php echo $film[4][2] ?></td>
					<td><?php echo $film[4][3] ?></td>
					<td><?php echo $film[4][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $film[5][0] ?></td>
					<td><?php echo $film[5][1] ?></td>
					<td><?php echo $film[5][2] ?></td>
					<td><?php echo $film[5][3] ?></td>
					<td><?php echo $film[5][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $film[6][0] ?></td>
					<td><?php echo $film[6][1] ?></td>
					<td><?php echo $film[6][2] ?></td>
					<td><?php echo $film[6][3] ?></td>
					<td><?php echo $film[6][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $film[7][0] ?></td>
					<td><?php echo $film[7][1] ?></td>
					<td><?php echo $film[7][2] ?></td>
					<td><?php echo $film[7][3] ?></td>
					<td><?php echo $film[7][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $film[8][0] ?></td>
					<td><?php echo $film[8][1] ?></td>
					<td><?php echo $film[8][2] ?></td>
					<td><?php echo $film[8][3] ?></td>
					<td><?php echo $film[8][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $film[9][0] ?></td>
					<td><?php echo $film[9][1] ?></td>
					<td><?php echo $film[9][2] ?></td>
					<td><?php echo $film[9][3] ?></td>
					<td><?php echo $film[9][4] ?></td>
				</tr>
				
		</table>
	</body>
</html>

		