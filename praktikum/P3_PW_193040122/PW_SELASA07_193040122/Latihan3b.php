<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan3b</title>
    <style>
    .container{
        border : 1px solid black;
    }
    </style>
</head>
<body>
<?php 
    $jawabanIsset = "Isset adalah = fungsi yang digunakan untuk memeriksa apakah suatu variabel sudah diatur atau belum. <br> <br>";
    $jawabanEmpty = "Empty adalah = fungsi yang digunakan sebagai penanda suatu kondisi. ";

    $GLOBALS['isset'] = $jawabanIsset;
    $GLOBALS['empty'] = $jawabanEmpty;


    function soal($style){
        echo "<div class = $style> 
        <p>" .$GLOBALS['isset'] . "</p>
        <p>" .$GLOBALS['empty'] . "</p>
        </div>";
    }
     echo soal('container');
?>
</body>
</html>