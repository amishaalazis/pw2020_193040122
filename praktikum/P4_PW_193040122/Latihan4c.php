<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h3>Daftar pemain bola terkenal dan clubnya</h3>
	<table>
	<?php 
	$bag = array();
		$bag["<strong>Christiano Ronaldo</strong>"] = "Juventus";
		$bag["<strong>Lionel Messi</strong>"] = "Barcelona";
		$bag["<strong>Luca Modric</strong>"] = "Real Madrid";
		$bag["<strong>Mohammad Salah</strong>"] = "Liverpool";
		$bag["<strong>Neymar JR</strong>"] = "Paris Saint Germain";
		$bag["<strong>Sadio Mane</strong>"] = "Liverpool" ;
		$bag["<strong>Zlatan Ibrahimovic</strong>"] = "AC Milan" ;


	 ?>
	
		<ol>
			<?php
				foreach ($bag as $a => $isi) {
					echo "<tr><td>$a</td><td> : </td><td>$isi</td></tr>";
				}
			?>
		</ol>
	</table>
</body>
</html>