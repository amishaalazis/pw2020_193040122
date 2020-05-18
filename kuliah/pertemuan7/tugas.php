<?php 
	$biodata = array(
		"foto" => "mis.jpg",
		"nama" => "Amisha",
		"ttl" => "30 Agustus 2001",
		"alamat" => "Bandung",
		"no telp" => "082219777428",

	);


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tugas</title>
 </head>
 <body>
 	<table style="border: 1px solid black">
 		<tr>
 			<th>Foto</th>
 			<th>Nama</th>
 			<th>Tanggal lahir</th>
 			<th>Alamat</th>
 			<th>No telp</th>
 		</tr>
 		<tr>
 			<td><img src="<?php echo $biodata['foto'];?>" style></td>
 		</tr>
 	</table>
 
 </body>
 </html>