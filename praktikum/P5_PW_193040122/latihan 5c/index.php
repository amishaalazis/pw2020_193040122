<?php
	// menghubungkan dengan file php lainnya
	require 'php/functions.php';

	// melakukan query
	$makanan = query("SELECT * FROM tugas");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
			<?php foreach ($makanan as $mkn) : ?>
				<p class="nama">
					<a href="php/detail.php?id=<?= $mkn['id'] ?>">
							<?= $mkn["nama"] ?>
					</a>
				</p>
			<?php endforeach; ?>
		</table>
	</div>
</body>
</html>
