<?php
error_reporting(0);
include ('asset.php')
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Converter Suhu</title>
</head>
<style>
	html{
		font-family: helvetica;
	}
</style>
<body>

	<div class="container">

		<h1>Konverter Suhu - PHP</h1>

		<br>

		<form action="index.php" method="POST">
			Suhu : <input type="number" name="celcius" required> Celcius
			<br><br>
			Konversi ke :

			<select name="pilihsuhu">
				<option>Celsius</option>
				<option>Reamur</option>
				<option>Farenheit</option>
				<option>Kelvin</option>
			</select>
			<br><br>

			<input type="submit" name="konversi" value="konversi">
		</form>

		<br><br>

	<?php


	$celsius 	= 	$_POST['celcius'];
	$suhu 		= 	$_POST['pilihsuhu'];
	$konversi 	= 	$_POST['konversi'];


	 if(isset($konversi)){

	 	switch($suhu){

	 		case "Celsius":
	 		echo floatval($celsius);
	 		break;

	 		case "Reamur":
	 		echo floatval($celsius * (4/5));
	 		break;

	 		case "Farenheit":
	 		echo floatval($celsius * (9/5) + 32);
	 		break;

	 		case "Kelvin":
	 		echo floatval($celsius + 273);
	 		break;
	 	}
	 }else{
	 	echo "ANDA HARUS MEMILIH";
	 }
	?>

	</div>
</body>
</html>