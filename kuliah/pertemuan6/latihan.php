<?php 
	$amisha = [
		"nama" => "Amisha Al azis",
		"TTL" => "Bandung, 30 Agustus 2001",
		"alamat" => "Jl ibrahim adjie no 135/136B",
		"nrp" => "193040122",
		"status" => "mahasiswa",
		"hobby" => "tidur",
		"makananfav" => "Sate Padang",
		"notelp" => "082219777428",
		"email" => "amishaalazis@yahoo.com",
		"zodiac" => "virgo",
];

echo $amisha["nama"];
echo "<br>";
echo $amisha["TTL"];
echo "<br>";
echo $amisha["alamat"];
echo "<br>";
echo $amisha["nrp"];
echo "<br>";
echo $amisha["status"];
echo "<br>";
echo $amisha["hobby"];
echo "<br>";
echo $amisha["makananfav"];
echo "<br>";
echo $amisha["notelp"];
echo "<br>";
echo $amisha["email"];
echo "<br>";
echo $amisha["zodiac"];

echo "<hr>";

foreach ($amisha as $nama => $biodata) {
		echo "$nama : $biodata <br>";
	}

echo "<hr>";
	print_r($amisha)


 ?>