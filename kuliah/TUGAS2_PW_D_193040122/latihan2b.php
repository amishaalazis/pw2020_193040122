<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Modul 2 - Latihan 1</title>
</head>
<body>
	<table border="1" cellpadding="3" cellspacing="0">
		<tr>
			<th>Kolom 1</th>
			<th>Kolom 2</th>
			<th>Kolom 3</th>
			<th>Kolom 4</th>
			<th>Kolom 5</th>
		</tr>
	<?php
	  $x=1;
	 while ($x <= 5) {
	 	echo "<tr>";

	 	if ($x % 2) {
	 		for ($y=1; $y <= 5 ; $y++) { 
	 		echo "<td>Baris $x, Kolom $y</td>";
	 		}
	 	}
	 	else{
	 		for ($y=1; $y <= 5 ; $y++) { 
	 		echo "<td>&nbsp;</td>";
	 		}

	 	}

	 	echo "</tr>";
	 $x++;
	 }
	  

 	?>

	</table>

</body>
</html>