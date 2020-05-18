
<?php 
	$bag = array(
	array("Christiano Ronaldo", "Juventus", "100", "76", "30"),
	array("Lionel Messi", "Barcelona", "120", "80", "12"),
	array("Luca Modric", "Real Madrid", "87", "12", "48"),
	array("Mohammad Salah", "Liverpool", "90", "103", "8"),
	array("Neymar JR", "Paris Saint Germain", "109", "56", "15"),
	array("Sadio Mane", "Liverpool", "63", "30", "70"),
	array("Zlatan Ibrahimovic", "Ac Milan", "100", "10", "12"),
	);

 ?>

	<!DOCTYPE html>
		<html>
		<head>
			<title>Latihan4d</title>
		</head>
		<body>
			<table border="1" cellspacing="0" cellpadding="10">
				<tr>
					<td><b>NO</b></td>
					<td><b>NAMA</b></td>
					<td><b><center>CLUB</center></b></td>
					<td><b>MAIN</b></td>
					<td><b>GOL</b></td>
					<td><b>ASSIST</b></td>
				</tr>
				<tr>
					<td>1</td>
					<td><?php echo $bag[0][0] ?></td>
					<td><?php echo $bag[0][1] ?></td>
					<td><?php echo $bag[0][2] ?></td>
					<td><?php echo $bag[0][3] ?></td>
					<td><?php echo $bag[0][4] ?></td>
				</tr>
				<tr>
					<td>2</td>
					<td><?php echo $bag[1][0] ?></td>
					<td><?php echo $bag[1][1] ?></td>
					<td><?php echo $bag[1][2] ?></td>
					<td><?php echo $bag[1][3] ?></td>
					<td><?php echo $bag[1][4] ?></td>
				</tr>
				<tr>
					<td>3</td>
					<td><?php echo $bag[2][0] ?></td>
					<td><?php echo $bag[2][1] ?></td>
					<td><?php echo $bag[2][2] ?></td>
					<td><?php echo $bag[2][3] ?></td>
					<td><?php echo $bag[2][4] ?></td>
				</tr>
				<tr>
					<td>4</td>
					<td><?php echo $bag[3][0] ?></td>
					<td><?php echo $bag[3][1] ?></td>
					<td><?php echo $bag[3][2] ?></td>
					<td><?php echo $bag[3][3] ?></td>
					<td><?php echo $bag[3][4] ?></td>
				</tr>
				<tr>
					<td>5</td>
					<td><?php echo $bag[4][0] ?></td>
					<td><?php echo $bag[4][1] ?></td>
					<td><?php echo $bag[4][2] ?></td>
					<td><?php echo $bag[4][3] ?></td>
					<td><?php echo $bag[4][4] ?></td>
				</tr>
				<tr>
					<td>6</td>
					<td><?php echo $bag[5][0] ?></td>
					<td><?php echo $bag[5][1] ?></td>
					<td><?php echo $bag[5][2] ?></td>
					<td><?php echo $bag[5][3] ?></td>
					<td><?php echo $bag[5][4] ?></td>
				</tr>
				<tr>
					<td>7</td>
					<td><?php echo $bag[6][0] ?></td>
					<td><?php echo $bag[6][1] ?></td>
					<td><?php echo $bag[6][2] ?></td>
					<td><?php echo $bag[6][3] ?></td>
					<td><?php echo $bag[6][4] ?></td>
				</tr>
				<tr>
					<td>#</td>
					<td colspan="2"><center>Jumlah</center></td>
					<td>
						<?php 
							$total = 0;
							foreach ($bag as $item => $value) {
								$total += $value[2];
							}
							echo $total;
						?>
					</td>
					<td>
						<?php 
							$total = 0;
							foreach ($bag as $item => $value) {
								$total += $value[3];
							}
							echo $total;
						?>
					</td>
					<td>
						<?php 
							$total = 0;
							foreach ($bag as $item => $value) {
								$total += $value[4];
							}
							echo $total;
						?>
					</td>
				</tr>
			</table>
		</body>
		</html>