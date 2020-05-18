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
		.bulet {
			border: 2px solid black;
			margin-right: 10px;
			margin-bottom: 10px;
			width: 50px;
			height: 50px;
			text-align: center;
			line-height: 50px;
			float: left;
			background-color: salmon;
			border-radius: 70%;
		}
		.clear {
			clear: both;
		}

	</style>
</head>
<body>
	<?php 
	$a = "1";
	$b = "2";
	$c = "3";
	 ?>

	<div class="kotak1">
		<div class="bulet">
			<?php
			echo $a; 
			 ?>
		</div>
		<div class="clear">
			
		</div>
		<div class="bulet">
			<?php
			echo $b; 
			 ?>
		</div>
		<div class="bulet">
			<?php
			echo $b; 
			 ?>
		</div>
		<div class="clear">
			
		</div>
		<div class="bulet">
			<?php
			echo $c; 
			 ?>
		</div>

		<div class="bulet">
			<?php
			echo $c; 
			 ?>
		</div> 
		<div class="bulet">
			<?php
			echo $c; 
			 ?>
		</div>
		<div class="clear">
			
		</div>
	</div>

</body>
</html>