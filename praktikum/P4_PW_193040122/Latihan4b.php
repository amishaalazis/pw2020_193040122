<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2</title>
</head>
<body>

<?php 
	$hardware = array();

	$hardware[] = "Mohammad Salah";
	$hardware[] = "Christiano Ronaldo";
	$hardware[] = "Lionel Messi";
	$hardware[] = "Ziatan Ibrahimovic";
	$hardware[] = "Neymar Jr";
?>

		<ol>
			<?php
			echo "<h4>Daftar pemain bola terkenal</h4>";
				for ($i=0; $i < count($hardware); $i++) { 
					echo "<li>$hardware[$i]</li>";
				}
			?>
		</ol>

<?php 	
		$hasil = array_push($hardware, "Luca Modric","Sadio Mane");
 ?>
		<hr>	

		<ol>
			<?php
			echo "<h4> Daftar pemain bola terkenal baru</h4>";
				for ($i=0; $i < count($hardware); $i++) { 
					echo "<li>$hardware[$i]</li>";
				}
			?>
		</ol>

</body>
</html>
