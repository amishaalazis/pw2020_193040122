<!DOCTYPE html>
<html>
<head>
	<title>Latihan 1c</title>
	<style>
		.kotak1 {
			border: 1px solid black;
			padding-left: 10px;
			padding-bottom: 10px;
			padding-top: 10px;
			width: 220px;
		}
		.kotak2 {
			border: 1px solid black;
			margin-right: 10px;
			margin-bottom: 10px;
			width: 50px;
			height: 50px;
			text-align: center;
			line-height: 50px;
			float: left;
		}
		.clear {
			clear: both;
		}

	</style>
</head>
<body>
	<?php 
	$a = "A";
	$b = "B";
	$c = "C";
	 ?>

	<div class="kotak1">
		<div class="kotak2">
			<?php
			echo $a; 
			 ?>
		</div>
		<div class="kotak2">
			<?php
			echo $a; 
			 ?>
		</div>
		<div class="kotak2">
			<?php
			echo $a; 
			 ?>
		</div>
		<div class="kotak2">
			<?php
			echo $b; 
			 ?>
		</div>
		<div class="kotak2">
			<?php
			echo $b; 
			 ?>
		</div> 
		<div class="clear">
			
		</div>
		<div class="kotak2">
			<?php
			echo $c; 
			 ?>
		</div>
		<div class="clear">
			
		</div>
	</div>

</body>
</html>