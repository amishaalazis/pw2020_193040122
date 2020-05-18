<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Modul 2 - Latihan 2c</title>
	<style>
		.kotak {
			width:30px; 
			height:30px;
			text-align:center;
			line-height:30px;
			border: 1px solid;
			float: left;
			margin: 2px;
			color: black;
		}
		.kotak1 {
			background-color: #57e65a;
			width:30px; 
			height:30px;
			text-align:center;
			line-height:30px;
			border: 1px solid;
			float: left;
			margin: 2px;
			color: black;
		}
		.clear{
			clear: both;

		}
		.ganjil {
			background-color: #003;
			color: #fff;
		}
		.genap {
			background-color: #57e65a;
		}
	</style>
</head>
<body>
	<?php 
	
	for ($i=1; $i <= 5 ; $i++) { 

		if($i%2){
			for ($j=$i; $j >= 1 ; $j--) { 
				echo "<div class='kotak'>#$i</div>";
				echo "<div class='kotak1 ganjil'>$i</div>";
			}
				echo "<div class='clear'></div>";
		} else {
		for ($j=$i; $j >= 1 ; $j--) { 
			echo "<div class='kotak'>#$i</div>";
			echo "<div class='kotak1 genap'>$i</div>";
		}
	echo "<div class='clear'></div>";
	}
	
	} 
	

	


	 ?>

</body>
</html>